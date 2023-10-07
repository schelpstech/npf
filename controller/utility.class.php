<?php

class Utility
{
    public function generateRandomString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateRandomText($length)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomDigits($length)
    {
        $characters = '1234567890';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function dayinterval($start, $end)
    {
        $interval = date_diff($start, $end);
        return $interval->format('%R%a days');
    }
    public function money($amount)
    {
        $regex = "/\B(?=(\d{3})+(?!\d))/i";
        return "&#8358;" . preg_replace($regex, ",", $amount);
    }


    public function RemoveSpecialChar($str)
    {
        $result = str_replace(array('\'', '"', ',', ';', '<', '>', '/'), '', $str);
        return $result;
    }

    public function inputEncode($input)
    {
        // Step 1: Base64 encode
        $base64Encoded = base64_encode($input);

        // Step 2: Hexadecimal encoding of the Base64-encoded data
        $hexEncoded = bin2hex($base64Encoded);

        return $hexEncoded;
    }

    public function inputDecode($encodedData)
    {
        // Step 1: Hexadecimal to binary
        $binary = hex2bin($encodedData);

        // Step 2: Base64 decoding of the binary data
        $decodedBase64 = base64_decode($binary);

        return $decodedBase64;
    }

    public function encodePassword($input)
    {
        // Step 1: Base64 encode
        $base64Encoded = base64_encode($input);

        // Step 2: Hexadecimal encoding of the Base64-encoded data
        $hexEncoded = bin2hex($base64Encoded);

        // Generate a salt for bcrypt (typically, the salt is automatically generated)
        $salt = password_hash($hexEncoded, PASSWORD_BCRYPT);

        // Hash the password with bcrypt and the generated salt
        $hashedPassword = password_hash($hexEncoded, PASSWORD_BCRYPT, ['salt' => $salt]);

        return $hashedPassword;
    }

    public function verifyPassword($inputPassword, $storedHashedPassword)
    {
        // Verify the password using bcrypt
        return password_verify($inputPassword, $storedHashedPassword);
    }



    public function notifier($notification_alert, $notification_message)
    {
        $result =
                '<div class="alert alert-'. $notification_alert .' alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Response!</h5>
                            ' . $notification_message . '
                </div>';
        $_SESSION['msg'] = $result;
    }


    /**
     * Summary of handleUploadedFile
     * @param mixed $inputName
     * @param mixed $allowedTypes
     * @param mixed $maxFileSize
     * @param mixed $uploadPath
     * @return string
     */
    public function handleUploadedFile($inputName, $allowedTypes, $maxFileSize, $uploadPath)
    {
        $file = $_FILES[$inputName];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        // Check if there was an error uploading the file
        if ($fileError !== UPLOAD_ERR_OK) {
            return "There was an error uploading the file.";
        }

        // Check if the file type is allowed
        if (!in_array($fileType, $allowedTypes)) {
            return "Invalid file type. Please upload an image file.";
        }

        // Check if the file size is within the limit
        if ($fileSize > $maxFileSize) {
            return "File size is too large. Please upload a file smaller than " . $maxFileSize . " bytes.";
        }


        $utility = new Utility();
        $saveFileName = ($utility->generateRandomString(8)) . ($utility->RemoveSpecialChar($fileName));
        // Move the uploaded file to the designated folder
        if (move_uploaded_file($fileTmpName, $uploadPath . '/' . $saveFileName)) {
            $_SESSION['fileName'] = $saveFileName;
            return "success";
        } else {
            return "There was an error uploading the file.";
        }
    }

    /**
     * Summary of calculateAge
     * @param mixed $birthdate
     * @return int
     */
    public function calculateAge($birthdate)
    {
        // Create DateTime objects for the birthdate and current date
        $birthDateObj = new DateTime($birthdate);
        $currentDateObj = new DateTime();

        // Calculate the difference between the two dates
        $ageInterval = $currentDateObj->diff($birthDateObj);

        // Return the calculated age
        return $ageInterval->y;
    }

}

<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Akun</title>
    </head>
    <body>
        <p>This is a notification from the Aerospace website that your account has been successfully created. 
            The following is detailed registration information that has been confirmed:</p>
        <h3>Detail Account:</h3>
        <h4>Name: {{ $data->name }}</h4>
        <h4>Email: {{ $data->email }}</h4>
        <p>For any questions please contact Aerospace customer service. Thank you for using this web.</p>
    </body>
</html>
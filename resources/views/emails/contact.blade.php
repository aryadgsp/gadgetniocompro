<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f7; padding: 20px;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0" style="background: #ffffff; border-radius: 10px; padding: 25px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <tr>
                        <td>

                            <h2 style="color: #333; margin-bottom: 20px; text-align: center;">
                                📬 New Contact Message
                            </h2>

                            <p style="font-size: 15px; color: #444;">
                                <strong>Name:</strong> {{ $data['name'] }}
                            </p>

                            <p style="font-size: 15px; color: #444;">
                                <strong>Phone:</strong> {{ $data['phone'] }}
                            </p>

                            <p style="font-size: 15px; color: #444;">
                                <strong>Email:</strong> {{ $data['email'] }}
                            </p>

                            <p style="font-size: 15px; color: #444; margin-top: 20px;">
                                <strong>Message:</strong><br>
                                <span style="background: #f8f8f8; display: block; padding: 12px; border-radius: 8px; margin-top: 5px; border-left: 4px solid #4f46e5;">
                                    {{ $data['message'] }}
                                </span>
                            </p>

                            <p style="margin-top: 30px; font-size: 14px; color: #555;">
                                Best regards,<br>
                                <strong>{{ $data['name'] }}</strong>
                            </p>

                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>

</body>

</html>
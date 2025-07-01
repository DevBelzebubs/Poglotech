<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de contacto</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f5f5f5;">

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #f5f5f5; padding: 30px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <tr>
                        <td style="background-color: #007bff; padding: 20px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 24px;">📬 Nuevo mensaje de contacto</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px;">
                            <p style="font-size: 16px; color: #333333;">Has recibido un nuevo mensaje desde el formulario de contacto de tu sitio web.</p>

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="margin-top: 20px;">
                                <tr>
                                    <td style="padding: 10px 0; border-bottom: 1px solid #eeeeee;">
                                        <strong style="color: #007bff;">👤 Nombre:</strong>
                                        <span style="margin-left: 10px;">{{ $name }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0; border-bottom: 1px solid #eeeeee;">
                                        <strong style="color: #007bff;">📧 Email:</strong>
                                        <span style="margin-left: 10px;">{{ $email }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0;">
                                        <strong style="color: #007bff;">📝 Mensaje:</strong>
                                        <p style="margin: 10px 0 0; color: #333333; line-height: 1.5;">{{ $messageBody }}</p>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin-top: 30px; font-size: 14px; color: #999999; text-align: center;">
                                Este mensaje fue enviado automáticamente desde tu sitio web.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #f1f1f1; text-align: center; padding: 15px; font-size: 12px; color: #666666;">
                            &copy; {{ date('Y') }} Portable Technology. Todos los derechos reservados.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>
</html>
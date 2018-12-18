<?php
    include "../../function.php";
    include "../../mailer.php";

    if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ) {
        $name = addslashes($_POST['name']);
        $email = $_POST['email'];
        $message = addslashes($_POST['message']);
        $dateNow = date("d-m-Y H:i:s");

        $to='enrico.c90@gmail.com'.','.$email;
        $subject="Spike Email Generator - Enrico Coccia";
        $header = '';
        $header .= "From: noreply@enricococcia.com\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html; charset=UTF-8";

        $objectMessage = '
        <table width="600" align="center" cellpadding="30" cellspacing="0" style="font-family: Arial; font-size: 16px; line-height: 16px; background-color: #f4f4f4; color: #888;">
            <tr>
                <td>
                '.$objectHeader.'
                <table width="100%;" cellpadding="20" cellspacing="0" style="background-color: #fff;">
                        <tr>
                            <td>
                                <table width="100%;" cellpadding="0" cellspacing="0" style="background-color: #fff; margin-bottom: 20px;">
                                    <tr>
                                        <td width="300" style="text-align: left;">
                                            <p style="font-size: 22px; margin: 0; line-height: 32px; color: #333;">Hi '.strip_tags($name).',</p>
                                        </td>
                                        <td width="300" style="text-align: right;">
                                            
                                            <a href="https://spike.co.nz/" target="_blank"><img src="https://www.enricococcia.com/spike/img/facebook-64.png" width="32" /></a>
                                            <a href="https://spike.co.nz/" target="_blank"><img src="https://www.enricococcia.com/spike/img/google-plus-64.png"  width="32"/></a>
                                            <a href="https://spike.co.nz/" target="_blank"><img src="https://www.enricococcia.com/spike/img/instagram-64.png" width="32"/></a>
                                        </td>
                                    </tr> 
                                </table>
                                <table width="100%;" cellpadding="0" cellspacing="0" style="background-color: #fff; text-align: center;">
                                    <tr>
                                        <td style="text-align: left;">
                                            <p style="margin: 0; color: #333; padding-bottom: 10px;">'.strip_tags($message).'</p>
                                        </td>
                                    </tr> 
                                </table>
                                <!-- divider -->
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" style="width: 100% !important;">
                                    <tr>
                                        <td align="left" valign="top" width="600px" height="1" style="background-color: #f89a34; border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 1px; height: 1px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
                                    </tr>
                                </table>
                                <table width="100%;" cellpadding="0" cellspacing="0" style="background-color: #fff;">
                                    <tr>
                                        <td valign="top" style="padding-right: 6px; padding-top: 10px;">
                                            <a href="https://spike.co.nz/" target="_blank"><img src="https://www.enricococcia.com/spike/img/web200.jpg" width="100%" /></a>
                                        </td>
                                        <td valign="top" style="padding-top: 10px;" colspan="2">
                                            <a href="https://spike.co.nz/" target="_blank"><img src="https://www.enricococcia.com/spike/img/web400.jpg" width="100%" /></a>
                                        </td>
                                    </tr> 
                                </table>
                                <table width="100%;" cellpadding="10" cellspacing="0" style="background-color: #f4f4f4; text-align: left;">
                                    <tr>
                                        <td>
                                            <p style="margin: 0; padding-top: 10px; padding-bottom: 15px; font-size: 24px; color: #999; line-height: 26px;">Glenn Edley speaks at the marketing to the Rural Sector Conference</p>
                                            <p style="margin: 0; padding-bottom: 10px; color: #333;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales tellus eget pellentesque ultricies. Aenean ullamcorper scelerisque libero a mollis. Proin eleifend augue eget libero accumsan, id viverra orci porttitor. Fusce sed urna odio. Proin egestas aliquam risus eu semper. Pellentesque eget mi odio. Phasellus in ultrices lectus, eu sodales dolor. Aenean lectus orci, aliquet quis lorem vel, luctus tempus dolor. Nullam eleifend sapien diam, sed tincidunt lectus rutrum a. Nulla a sapien vestibulum, suscipit lacus non, facilisis massa. Ut nec congue magna. In porta ipsum eget ipsum pellentesque rutrum. Quisque a risus vitae tellus molestie blandit ut eu metus.</p>
                                        </td>
                                    </tr> 
                                </table>
                                <!-- divider -->
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" style="width: 100% !important;">
                                    <tr>
                                        <td align="left" valign="top" width="600px" height="1" style="background-color: #f89a34; border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 1px; height: 1px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
                                    </tr>
                                </table>
                                <table width="100%;" cellpadding="0" cellspacing="0" style="background-color: #fff;">
                                    <tr>
                                        <td width="300" valign="top" style="padding-right: 3px; padding-top: 10px;">
                                            <a href="https://spike.co.nz/" target="_blank"><img src="https://www.enricococcia.com/spike/img/half1.jpg" width="100%" /></a>
                                            <p style="margin: 0; padding: 10px; background-color: #f4f4f4; text-align: left; font-size: 24px; color: #999; line-height: 26px;">AI and the future of Marketing</p>
                                            <p style="margin: 0; padding: 10px; background-color: #f4f4f4; text-align: left; color: #333;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales tellus eget pellentesque ultricies. Aenean ullamcorper scelerisque libero a mollis. Proin eleifend augue eget libero accumsan, id viverra orci porttitor. Fusce sed urna odio. Proin egestas aliquam risus eu semper.</p>
                                            <p style="margin: 0; background-color: #f4f4f4; padding: 10px 10px 20px 10px; ">
                                                <a href="https://spike.co.nz/" target="_blank" style="color: #f89a34; text-decoration: underline;">Read more</a>
                                            </p>
                                        </td>
                                        <td width="300" valign="top" style="padding-left: 3px; padding-top: 10px;">
                                            <a href="https://spike.co.nz/" target="_blank"><img src="https://www.enricococcia.com/spike/img/half2.png" width="100%" /></a>
                                            <p style="margin: 0; padding: 10px; background-color: #f4f4f4; text-align: left; font-size: 24px; color: #999; line-height: 26px;">How to Become the CMO</p>
                                            <p style="margin: 0; padding: 10px; background-color: #f4f4f4; text-align: left; color: #333;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales tellus eget pellentesque ultricies. Aenean ullamcorper scelerisque libero a mollis. Proin eleifend augue eget libero accumsan, id viverra orci porttitor. Fusce sed urna odio. Proin egestas aliquam risus eu semper.</p>
                                            <p style="margin: 0; background-color: #f4f4f4; padding: 10px 10px 20px 10px;">
                                                <a href="https://spike.co.nz/" target="_blank" style=" color: #f89a34; text-decoration: underline;">Read more</a>
                                            </p>
                                            
                                        </td>
                                    </tr> 
                                </table>
                            </td>
                        </tr> 
                    </table>
                    '.$objectFooter.'
                </td>
            </tr> 
        </table>';
                
        $object = $objectMessage;

        mail($to,$subject,$object,$header);

        $response_array['status'] = 'success';

    } else {
        $response_array['status'] = 'error';
    }

    header('Content-type: application/json');
    echo json_encode($response_array);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="initial-scale=1.0">    <!-- So that mobile webkit will display zoomed in -->
    <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->

    <title>{{@$sitename}}</title>
    <style type="text/css">
        /* Resets: see reset.css for details */
        .ReadMsgBody { width: 100%; background-color: #ebebeb;}
        .ExternalClass {width: 100%; background-color: #ebebeb;}
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
        body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
        body {margin:0; padding:0;}
        table {border-spacing:0;direction: rtl;}
        table td {border-collapse:collapse;}
        .yshortcuts a {border-bottom: none !important;}
        a{color:#777777;text-decoration: none;}

        /* Constrain email width for small screens */
        @media screen and (max-width: 600px) {
            table[class="container"] {
                width: 95% !important;
            }
        }

        /* Give content more room on mobile */
        @media screen and (max-width: 480px) {
            td[class="container-padding"] {
                padding-left: 12px !important;
                padding-right: 12px !important;
            }
         }
         /*
 * Various CSS Resets
 * ----------------
 * Standard CSS resets to troubleshoot common problems. Use directly in your HTML.
 * This separate file is for reference only.
 * Source: Mailchimp Email Blueprints https://github.com/mailchimp/Email-Blueprints
 */


/* Force Hotmail to display emails at full width */
 .ReadMsgBody {
    width: 100%;
}
 .ExternalClass {
    width: 100%;
}

/* Forces Hotmail to display normal line spacing. */
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
    line-height:100%;
}

/* Prevents Webkit and Windows Mobile platforms from changing default font sizes. */
body {
    -webkit-text-size-adjust:none;
    -ms-text-size-adjust:none;
}

/* Resets all body margins and padding to "0" for good measure. */
body {
    margin:0;
    padding:0;
}

/* Resolves webkit padding issue. */
table {
    border-spacing:0;
}

/* Resolves the Outlook 2007, 2010, and Gmail td padding issue. */
table td {
    border-collapse:collapse;
}

/* Weird Yahoo links and border bottom */
.yshortcuts a {
    border-bottom: none !important;
}



    </style>
</head>
<body style="margin:0; padding:10px 0;" bgcolor="#ebebeb" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<br>

<!-- 100% wrapper (grey background) -->
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#ebebeb">
  <tr>
    <td align="center" valign="top" bgcolor="#ebebeb" style="background-color: #ebebeb;">

      <!-- 600px container (white background) -->
      <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" bgcolor="#ffffff">
        <tr>
          <td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 14px; line-height: 20px; font-family: Helvetica, sans-serif; color: #333;">
            <br>

            <!-- ### BEGIN CONTENT ### -->
            <div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #D03C0F">
            بيانات العضوية الخاصة بك
            </div>
            <br>

            مرحبا بك يا ({{$name}}) معنا ونشكرك على ثقتك فى <b><a href="{{url('/')}}">{{@$sitename}}</a></b> 
           
            <br>
            <br>
            <strong>بريد الدخول:</strong>
            <br>
            {{$email}}
             <br>
            <br>
            <strong>رابط  إستعادة كلملة المرور هو:</strong>
             
            <br>
            <a href="{{URL::to('reset/password/'.$url)}}">{{URL::to('reset/password/'.$url)}}</a>
            <br>
            <br>
            
            <br>
            <em style="font-style:italic; font-size: 12px; color: #aaa;">{{@$sitename}} <a href="{{url('/')}}">{{url('/')}}</a></em>
            <br><br>

            <!-- ### END CONTENT ### -->

          </td>
        </tr>
      </table>
      <!--/600px container -->

    </td>
  </tr>
</table>
<!--/100% wrapper-->
<br>
<br>
</body>
</html>


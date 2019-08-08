<?php

/*  ====================================================================
 *  Copyright (c) 2000 Astonish Inc.
 *  www.blazonry.com/scripting/upload-size.php
 *  All rights reserved.
 *
 *  Redistribution and use in source and binary forms, with or without
 *  modification, are permitted provided that the following conditions
 *  are met:
 *
 *  1. Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *  2. Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in the
 *     documentation and/or other materials provided with the distribution.
 *
 *  3. The name of the author may not be used to endorse or promote products
 *     derived from this software without specific prior written permission.
 *
 *  THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR
 *  IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 *  OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *  IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT,
 *  INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *  NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 *  DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 *  THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 *  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
 *  THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *  ====================================================================
 */


/* 
    SCRIPT CHANGE LOG:

    2002-06-10:

        * Plugged security hole with is_uploaded_file() function. Thanks much 
          to Timothy Rieder for pointing this out.


    2001-01-10:

        * Added line of text letting user know what extension was read in
          when denying a file upload. Suggestion by Sandro Juergensen.


    2001-01-09: 

        * Removed GIF support from script to not encourage the use of
          silly patents. For more info: http://www.gnu.org/philosophy/gif.html

        * Cleaned up the code and comments

        * Moved the extension check out of the size check loop. 
          Thanks Sandro Juergensen <forgetit@sandlatscher.de>

        * Added lower casing the extension check
          
        * Added converting spaces in filename to underscores

    2000-05-31:
        
        * original script released
*/
?>
<html>

<head>
    <title>web.blazonry : PHP : Upload and Resize an Image</title>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    /* SUBMITTED INFORMATION - use what you need
     * temporary filename (pointer): $imgfile
     * original filename           : $imgfile_name
     * size of uploaded file       : $imgfile_size
     * mime-type of uploaded file  : $imgfile_type
     */

     /*== upload directory where the file will be stored 
          relative to where script is run ==*/
    
    $uploaddir = ".";
    

    /*== get file extension (fn at bottom of script) ==*/
    /*== checks to see if image file, if not do not allow upload ==*/
    $pext = getFileExtension($imgfile_name);
    $pext = strtolower($pext);
    if (($pext != "jpg")  && ($pext != "jpeg"))
    {
        print "<h1>ERROR</h1>Image Extension Unknown.<br>";
        print "<p>Please upload only a JPEG image with the extension .jpg or .jpeg ONLY<br><br>";
        print "The file you uploaded had the following extension: $pext</p>\n";

        /*== delete uploaded file ==*/
        unlink($imgfile);
        exit();
    }


    //-- RE-SIZING UPLOADED IMAGE

    /*== only resize if the image is larger than 250 x 200 ==*/
    $imgsize = GetImageSize($imgfile);

    /*== check size  0=width, 1=height ==*/
    if (($imgsize[0] > 250) || ($imgsize[1] > 200)) 
    {
        /*== temp image file -- use "tempnam()" to generate the temp
             file name. This is done so if multiple people access the 
            script at once they won't ruin each other's temp file ==*/
        $tmpimg = tempnam("/tmp", "MKUP");

        /*== RESIZE PROCESS
             1. decompress jpeg image to pnm file (a raw image type) 
             2. scale pnm image
             3. compress pnm file to jpeg image
        ==*/
        
        /*== Step 1: djpeg decompresses jpeg to pnm ==*/
        system("djpeg $imgfile >$tmpimg");
        

        /*== Steps 2&3: scale image using pnmscale and then
             pipe into cjpeg to output jpeg file ==*/
        system("pnmscale -xy 250 200 $tmpimg | cjpeg -smoo 10 -qual 50 >$imgfile");

        /*== remove temp image ==*/
        unlink($tmpimg);

    }

    /*== setup final file location and name ==*/
    /*== change spaces to underscores in filename  ==*/
    $final_filename = str_replace(" ", "_", $imgfile_name);
    $newfile = $uploaddir . "/$final_filename";
    
    /*== do extra security check to prevent malicious abuse==*/
    if (is_uploaded_file($imgfile))
    {

       /*== move file to proper directory ==*/
       if (!copy($imgfile,"$newfile")) 
       {
          /*== if an error occurs the file could not
               be written, read or possibly does not exist ==*/
          print "Error Uploading File.";
          exit();
       }
     }

    /*== delete the temporary uploaded file ==*/
    unlink($imgfile);

    
    print("<img src=\"$final_filename\">");

    /*== DO WHATEVER ELSE YOU WANT
         SUCH AS INSERT DATA INTO A DATABASE  ==*/

}
?>


</head>
<body bgcolor="#FFFFFF">

    <h2>Upload and Resize an Image</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="50000">

    <p>Upload Image: <input type="file" name="imgfile"><br>
    <font size="1">Click browse to upload a local file</font><br>
    <br>
    <input type="submit" value="Upload Image">
    </form>

</body>
</html>

<?php
    /*== FUNCTIONS ==*/

    function getFileExtension($str) {

        $i = strrpos($str,".");
        if (!$i) { return ""; }

        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);

        return $ext;

    }
?>


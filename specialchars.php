<?php

var_dump("<script>alert('XSS!!!!')</script>");
# string(33) "<script>alert('XSS!!!!')</script>"

var_dump(htmlspecialchars("<script>alert('XSS!!!!')</script>"));
# string(45) "&lt;script&gt;alert('XSS!!!!')&lt;/script&gt;"

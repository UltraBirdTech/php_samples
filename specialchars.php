<?php

var_dump("<script>alert('XSS!!!!')</script>");
var_dump(htmlspecialchars("<script>alert('XSS!!!!')</script>"));

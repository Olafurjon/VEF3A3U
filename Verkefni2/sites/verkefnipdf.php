<?php
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=filename.pdf");
@readfile('../Verkefni_2_OOP.pdf');

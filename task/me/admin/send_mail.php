<?php
include('../mail_checker.php');

merchantMail("COMPANY NAME","images/avatar.jpg","arun@kouponize.com","PASSWORD","MERCHANT MOBILE");
forgotMerchant("COMPANY NAME","images/avatar.jpg","arun@kouponize.com","PASSWORD","MERCHANT MOBILE");
kouponMail("COMPANY NAME","images/avatar.jpg","arun@kouponize.com","MERCHANT MOBILE","KOUPON TITLE","Long Desc Long Desc Long Desc Long Desc Long Desc Long Desc Long Desc Long Desc Long Desc Long Desc Long Desc Long Desc Long Desc Long Desc Long Desc ");
availedMerchant("COMPANY NAME","images/avatar.jpg","arun@kouponize.com","MERCHANT MOBILE","KOUPON TITLE","VOLUME","KOUPON IDENTIFIERS","USER MAIL","USER MOBILE");
userMail("arun@kouponize.com","PASSWORD","USER MOBILE");
forgotUser("arun@kouponize.com","PASSWORD","USER MOBILE");
availedUser("arun@kouponize.com","images/avatar.jpg","KOUPON TITLE","KOUPON IDENTIFIERS","COMPANY NAME","Company Mail","Company Moblie","Line1","Line2","Line3","City");
//adminMail("COMPANY NAME","images/avatar.jpg","arun@kouponize.com","PASSWORD","MERCHANT MOBILE");
?>
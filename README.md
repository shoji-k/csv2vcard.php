csv2vcard.php
=============

convert google.csv to vcard (vcf) 

グーグル連絡先をガラケーに取り込む

1. export google address as google csv
2. csv2vcard.phpと同じ場所にgoogle.csvを設置
3. php -f csv2vcard.php > google.vcf
4. さくらエディタなどを使ってgoogle.vcfの文字コードをsjisに変更
5. ガラケーにメール添付などで送り、取り込む

use PDF::API2::Lite;
use PDF::API2;
use GD::Barcode;
use Cwd 'abs_path';
use Cwd;
use File::Basename;
use DBI;
use POSIX;
use constant mm => 25.4 / 72;


# Аргументы на вход:
# 1 - orderid
# 2 - bleed
# 3 - margin
# 4 - spine

$main_path = $ARGV[0];
$orderid = $ARGV[1];
$cover_bleed = $ARGV[2];
$cover_margin = $ARGV[3];
$cover_spine = $ARGV[4];

$cover_file = $orderid . '_cover.pdf';
$barcode_file = $orderid . '_barcode.pdf';
$cover_file_bc = $orderid . '_cover_bc.pdf'; 

# Сделать Штрих код (имя_файла_штрих_кода, номер_штрих_кода)
$bc = $main_path . '/' . $barcode_file;
`/usr/bin/python ./ext/createbarcodepdf.py $bc $orderid`;

# Отступ Штрих код снизу
$bottom_offset = $cover_margin + $cover_bleed;
$bottom_offset = ceil($bottom_offset / mm);

# TODO изм команду для linux (без magick)
$cf = $main_path . '/' . $cover_file;
my $cover_width = `/usr/bin/identify -format "%w" $cf`;
# my $cover_width = `/usr/bin/identify -format "%w" $cover_file`;

# Отступ Штрих код слева
$back_width = ($cover_width / 2) - (ceil($cover_spine / mm) / 2);
$left_offset = $back_width - (ceil(40 / mm) + ceil($cover_margin / mm) );


$pdf = PDF::API2->new();
# $old = PDF::API2->open("$cover_file");
$old = PDF::API2->open("$cf");
# $old2 = PDF::API2->open("$barcode_file");
$old2 = PDF::API2->open("$bc");
$page = $pdf->importpage($old, 1);
$gfx = $page->gfx();
$xo2 = $pdf->importPageIntoForm($old2, 1);
$gfx->formimage($xo2, $left_offset, $bottom_offset, 0.9);
# $pdf->saveas("$cover_file_bc");
# $pdf->saveas("$cover_file");
$pdf->saveas("$cf");
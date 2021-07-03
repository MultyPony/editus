<?php 
$ref = $_SERVER['QUERY_STRING']; 
if ( !empty($ref) ) $ref = '?'.$ref; 
header('HTTP/1.1 301 Moved Permanently'); 
header('Location: new/spravka.html'.$ref); 
exit(); 
?>
<?php session_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="//www.w3.org/1999/xhtml"> <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  <title>Справочник автора - термины и определения по изданию книг</title>
<meta name="keywords" content="что такое isbn, авторский лист, как рассчитать количество знаков">
<meta name="description" content="Что нужно знать при издании книги">
<link rel="stylesheet" type="text/css" href="css/styles.css" media="all"><link rel="shortcut icon" href="img/favicon.ico"></head>
<body>
<div>

<div id="left">
<div id="relative">
<a href="//<?php echo $_SERVER['SERVER_NAME'];?>"><img src="img/logo.gif" width="250" height="328" alt="Editus" border="0"></a>
<?php include 'topmenu.php';?>
</div>


<div>

<?php include 'menubook.php';?>

</div>
</div>


<div id="right">

<?php include 'mainmenu.php';?>
<h1>Справочник автора</h1>
<div class="text"> <br><br><a class="head" name="isbn">ISBN</a> - универсальный код, идентифицирует каждую выходящую в мире книгу. Позволяет издателям, книготорговцам,библиотекарям, научным работникам в распространении и в поиске книг. Система ISBN применяется более чем в 130 странах. Присвоение индекса ISBN является платным, поскольку он выделяется издательству Российской книжной палатой на платной основе.ISBN необходим для реализации книг через торговые сети. Если книга издается ограниченным тиражом для внутреннего пользования, то наличие ISBN не обязательно.<br>Международный стандартный номер книги состоит из аббревиатуры ISBN (независимо от языка издания) и тринадцати арабских цифр. Последняя цифра кода ISBN — контрольная и может быть римской цифрой X, используемой для обозначения числа 10. Цифровая часть кода ISBN состоит из пяти групп цифр, содержащих различное количество цифровых знаков и отделяемых друг от друга дефисом. Группы цифр обозначают   следующие данные: идентификатор страны; идентификатор издательства; порядковый номер книги; контрольная цифра. <a class="head" name="alist"><br><br>Авторский лист</a> &mdash; единица объема литературного произведения, равная 40&nbsp;000 печатных знаков (букв, цифр, знаков препинания и т. п., считая также пробелы между словами). Примерно 23 страницы формата А 4 машинописного текста, напечатанного 12 кг в 1,5 интервала, или 700 строкам стихотворного текста. В программе Word количество знаков в файле можно посчитать: Сервис &rarr; Статистика (обязательно включить &laquo;Учитывать все сноски&raquo;, если они в тексте есть). В верстке обрезного формата 140 х 205 мм один авторский лист прозаического текста занимает примерно 25 страниц.<br><br><a class="head">Авторское право</a> — регулирует отношения, возникающие в связи с созданием и использованием произведений науки, литературы и искусства.В России нормы Авторского права установлены законом РФ "Об авторском праве и смежных правах". Согласно ст. 48 закона РФ "Об авторском праве..." за нарушение предусмотренных этим законом авторских и смежных прав наступает гражданская, уголовная и административная ответственность в соответствии с законодательством Российской Федерации. Закон утверждает, что авторское право возникает в момент создания произведения и никакая регистрация этого факта не требуется,хотя и не исключается. В ст. 9. " Возникновение авторского права. Презумпция авторства" говорится: "... Авторское право напроизведение науки, литературы и искусства возникает в силу факта его создания. Для возникновения и осуществления авторского права не требуется регистрации произведения, иного специального оформления произведения или соблюдения каких-либо формальностей."<br><br><a class="head" name="bigov">Биговка</a> — проглаживание, продавливание тупым ножом на обложках и фальцуемых открытках линий сгиба, благодаря чему стороны легко и ровно сгибаются.<br><br><a class="head" name="brosh">Брошюровка</a> — процесс превращения отпечатанных листов в покрытое обложкой издание. Включает разрезку отпечатанных листов, фальцовку, подготовку блоков.<br><br><a class="head" name="verstka">Вёрстка</a> (от англ. making-up) — процесс формирования полос набора изданий определенного формата с учетом рекомендаций и правил, существующих как в российской, так и в мировой практике книжного дела.<br><br><a class="head">Выходные сведения</a> — совокупность данных, всесторонне характеризующих издание и предназначенных для информирования потребителей, библиографической обработки и статистического учета изданий. Включают в себя: надзаголовочные данные; имя автора (соавторов); заглавие издания; подзаголовочные данные; выходные данные; сведения об издании, с которого сделан перевод или перепечатка; классификационные индексы (УДК и ББК); авторский знак; Международный стандартный номер книги (ISBN); знак охраны авторского права; надвыпускные данные; выпускные данные. Требования к составу выходных сведений книжных изданий, оформление выходных сведений и порядок расположения на элементах изданий определяет ГОСТ Р 7.0.4–2006. <br><br><a class="head" name="design">Дизайн</a> — использование графического дизайна включает в себя обложки книг, журналы, альбомы, реклама. Может включать в себя логотип или другое изображение, организованный текст и чистые элементы дизайна, такие как формы и цвет, способствующие единому восприятию картинки. Композиция — одно из важнейших свойств графического дизайна, в особенности при использовании предварительных материалов или иных элементов. <br><br><a class="head">Кегль</a> (кегель) — основная размерная характеристика шрифта. Обозначается цифрой.<br><br><a class="head" name="correct">Корректура</a> (от лат. correctura — исправление, улучшение) — процесс исправления грамматических и технических ошибок и недостатков в текстовом и графическом материалах, подготовленных для размножения типографским (или любым другим) способом.<br><br><a class="head" name="lamin">Ламинация обложки</a> &ndash; покрытие пленкой внешней стороны обложки. Используется в качестве защитного материала. Придает обложке определенные эффекты. Возможно ламинирование обложки глянцевой или матовой пленкой.<br><br><a class="head">Лакирование обложки</a> &ndash; наиболее распространенный и дешевый способ отделки обложки. Используется в качестве защитного покрытия. При лакировании <br />обложки применяют глянцевый или матовый лак. <br><br><a class="head" name="numer">Нумерация</a> — простановка последовательных цифровых порядковых номеров.<br><br><a class="head">Переплет</a> &ndash; прочная, обычно твёрдая крышка из картона, оклеенная тканью, бумагой и т.п., в которую заключаются (вклеиваются) сброшюрованные листы книги. В силу своей трудоемкости и соответственно дороговизны целесообразно использовать переплет для изданий с большим сроком эксплуатации.<br><br><a class="head" name="edit">Редактирование</a> — анализ, оценка и процесс обработки в композиционном, стилевом (языковом) отношении авторского произведения для публикации в печати. Условно различают политическое, научное, литературное редактирование. Редактирование художественных произведений — совместный с автором творческий процесс, направленный на совершенствование содержания и формы произведения при сохранении индивидуальности авторского стиля.<br><br><a class="head" name="termo">Термография</a> — отделочный процесс превращения отпечатанных изображений под воздействием теплового излучения в рельефные.<br><br><a class="head" name="termopod">Термоподъем</a> — отделочный процесс превращения отпечатанных изображений в рельефные (с помощью специального состава).<br><br><a class="head" name="tisnenie">Тиснение</a> — изменение фактуры поверхности бумаги (картона) путём нанесения с помощью тиснильного каландра выпуклого, вдавленного или прозрачного рисунка.<br><br><a class="head" name="folga">Тиснение фольгой</a> — отделочный процесс фольгой, связующее которой, скрепляющее в ней частицы пигмента, при давлении печатающих элементов нагретого штампа становится вязкотекучим и прочно соединяет пигментный слой фольги с поверхностью изделия.<br><br><a class="head" name="kongrev">Тиснение конгревное</a> — бескрасочное или красочное тиснение штампами, создающее выпуклое изображение, похожее на барельеф.<br><br><a class="head" name="falz">Фальцовка</a> — операция сгибания, складывания запечатанного листа в тетрадь.<br><br><a class="head">Цветность обложки</a><br>Большая часть современных обложек печатается в четыре краски (полноцвет), при помощи которых передаются все оттенки. Для уменьшения стоимости печати обложки или при решении определенных дизайнерских задач применяется печать в 1-2 краски. <br />Печать на обложке может быть выполнена как с внешней, так и с внутренней стороны. <br />При использовании цветных материалов, печать возможна только в 1-2 краски. <br />В полиграфии принято условное обозначение количества цветов при печати с одной или с двух сторон. Например: <br /><br />1+0 - печать в одну краску с одной стороны<br />2+0 - печать в две краски с одной стороны <br />3+0 - печать в три краски с одной стороны <br />4+0 - печать в четыре краски (полноцветное изображение)<br />При печати с двух сторон обозначается, например 4+4 <br /><br />        </div> 
<?php include 'footer.php';?>

</div>
</div>

</body>

</html>
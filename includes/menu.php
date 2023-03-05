<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<?php $lang = $_GET['lang']; ?><div id="MenuContainer">
 <a href="http://andreperrystudio.com"><img src="/images/menu/MenuPhoto.jpg" alt="" width="206" height="115" border="0" /></a>
 <a href="/biography/?lang=<?php echo $lang ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Button01','','/images/menu/<?php echo $lang ?>/Button01_over.jpg',1)">
 <img src="/images/menu/<?php echo $lang ?>/Button01.jpg" alt="Biographie" name="Button01" width="206" height="75" border="0" id="Button01" /></a>
 <a href="/discography/?lang=<?php echo $lang ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Button02','','/images/menu/<?php echo $lang ?>/Button02_over.jpg',1)">
 <img src="/images/menu/<?php echo $lang ?>/Button02.jpg" alt="Discographie" name="Button02" width="206" height="70" border="0" id="Button02" /></a>
 <a href="/awards/?lang=<?php echo $lang ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Button03','','/images/menu/<?php echo $lang ?>/Button03_over.jpg',1)">
 <img src="/images/menu/<?php echo $lang ?>/Button03.jpg" alt="Prix" name="Button03" width="206" height="70" border="0" id="Button03" /></a>
<a href="/biography/index.php?lang=<?php echo $lang ?>#contact-info" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Button04','','/images/menu/<?php echo $lang ?>/Button04_over.jpg',1)">
<img src="/images/menu/<?php echo $lang ?>/Button04.jpg" alt="Contact" name="Button04" width="206" height="70" border="0" id="Button04" /></a></div>

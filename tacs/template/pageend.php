
</div></article>

<!-- footer -->
<footer><div class="content">

<aside>
[[<?php
if (isset($FOOTER1)) echo $FOOTER1;
else echo
	'<h2>About me</h2>', "\n",
	'<p>I am Esther Brunati, an established British artist living in Devon. My original artwork has been displayed in several UK galleries and art shows. I can now offer any piece directly from this website. Please browse my online gallery or contact me for further details.</p>';
?>]]
</aside>

[[<?php
if (isset($FOOTER2)) echo $FOOTER2;
else echo
	'<h2>Inspiration</h2>', "\n",
	'<p>My paintings are acrylic and mixed media. Most are spontaneous &ndash; a perfuse mixture of colour and movement which draw the eye in and lighten the spirit.</p>';
?>]]

<hr />

<nav><p>
[[<?php
// main menu
foreach ($menu as $m) {
	echo $m->CreateLink(), ($m->Key == 'c' ? '' : ' | ');
}
?>]]
</p></nav>

<p id="copyright">&copy; <?php echo date('Y'); ?> Esther Brunati, website by <a href="https://www.optimalworks.net/">OptimalWorks.net</a></p>

</div></footer>

<!-- JavaScript -->
[[<?php
if ($local) {
	$script = array('owl', 'owl_css', 'owl_dom', 'owl_event', 'main');
}
else {
	$script = array('script');
}
foreach ($script as $js) echo "<script src=\"${root}script/$js.js\"></script>\n";
?>]]

</body>
</html>

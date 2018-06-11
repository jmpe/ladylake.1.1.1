<div id="footer">
<div id="footerLegal">
    <p align="center">footerLegal</p>
  </div>
  <div id="footerContact">
    <p align="center">footerContact</p>
  </div>
	<div id="footerShell">
    <table width="100%" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td width="33%" valign="top"><h1>Site Map </h1></td>
        <td width="33%"><ul>
          <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
          </ul>
        </td>
        <td width="33%" valign="top">
          <h1 align="center">Contact Us</h1>
          <p align="center">
            409 Fennell Boulevard<br />
            Lady Lake, FL. 32159<br />
            352-751-1500
          </p>
          <p align="center"><a href="mailto:foo@ladylake.org">foo@ladylake.org</a></p>
          <p align="center"><a href="/directory">Click here to see our directory.</a></p>
        </td>
      </tr>
    </table>
    <p style="clear:both">&nbsp;</p>
  </div>
</div>
<?php wp_footer(); ?>
</body>

</html>
<?php $pagetitle = 'News'; ?>

<?php include('header.php'); ?>
<!--  LEFT NAVIGATION HERE -->
<?php include('news_left_navigation.php'); ?>
<?php include('sub_header.php'); ?>
 <style>
 #facebook

    {

    border:none;

     overflow:hidden;

      width:700px;

       height:500px;

    }

    

    #content

    {

    	padding-top:30px;

    	padding-left:30px;

    }

    </style>
<table>
   <tr>
     <td valign='top'>
	<iframe id="facebook" name="facebook" src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FGreen-Bay-WI%2FBalance-Chiropractic-of-Green-Bay%2F112216784810&width=700&colorscheme=light&connections=10&stream=true&header=false&height=500" scrolling="no" frameborder="0"  allowTransparency="false"></iframe>
	</td>
      <td valign='top' style='text-align:center;padding:10px;padding-top:0px;padding-right:3px;'>
	<script src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script>
	new TWTR.Widget({
	  version: 2,
	  type: 'profile',
	  rpp: 30,
	  interval: 30000,
	  width: 190,
	  height: 400,
	  theme: {
	    shell: {
	      background: '#c2d4f3',
	      color: '#0a0a0a'
	    },
	    tweets: {
	      background: '#e8f3f7',
	      color: '#000000',
	      links: '#0084b4'
	    }
	  },
	  features: {
	    scrollbar: true,
	    loop: false,
	    live: false,
	    behavior: 'all'
	  }
}).render().setUser('drkiefert').start();
</script>

</td></tr></table>

<?php include('footer.php'); ?>
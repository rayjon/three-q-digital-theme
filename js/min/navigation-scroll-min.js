jQuery(document).ready(function(){var o=0;jQuery(".entry-content").css("margin","0"),jQuery("#masthead").css({"background-color":"transparent"}),jQuery(document).scroll(function(){o=jQuery(this).scrollTop(),jQuery("#masthead").css(o>0?{"background-color":"#28464A",position:"fixed",padding:"20px 0"}:{"background-color":"transparent",position:"absolute",padding:"20px 0"})})});
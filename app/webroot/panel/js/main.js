jQuery(document).ready(function(){
																	
        ezi_autocomplete();// jQuery UI autocompleter - http://jqueryui.com/demos/autocomplete/
        ezi_tablesorter();//tablesorter - http://tablesorter.com
		ezi_tweets();// tweets - @http://tweet.seaofclouds.com/
	    ezi_toggle_mode();// hide and show pages advance of simple mode			   
        // notive there's no editor function, at the bottom is the code!
		ezi_tooltips();//http://onehackoranother.com/projects/jquery/tipsy/
        ezi_spinner();//basic jQuery
		ezi_forms_checkbox_radio();// checkbox, radio (input) styling - http://www.verot.net/jquery_select_skin.htm
		ezi_toggle_box();// toggle box
		ezi_jqueryui();//jQuery UI tabs - http://jqueryui.com/demos/tabs/
		ezi_dd_menu();//dropdown menu
		ezi_dialogs();//dialog messages, notic that the jqueryui dialogs are located in the jqueryui function
		ezi_show_ctrls();//showing and hiding some ctrls
		ezi_del_rows();// deleting a row jquery way
		ezi_lightbox();// lightbox info @ http://www.pirolab.it/pirobox/
        //ezi_scroll_top();// animated scroll to top
		ezi_forms_select();// select (input) styling info @ http://www.verot.net/jquery_select_skin.htm
		ezi_checkAll();// jquery check all checkboxes with one click
        ezi_browser_dec();// jQuery browser check
		
		// new in v1.4		
		ezi_equalHeight(jQuery(".tab-2, .tabs-ctrls-veri"));
		ezi_treeview();//http://bassistance.de/jquery-plugins/jquery-plugin-treeview/
        ezi_forms_upload();// upload (input) styling info @ http://www.appelsiini.net/projects/filestyle
		ezi_calendar();// calendar info @ http://arshaw.com/fullcalendar/

		//new in 1.7, sorting
        ezi_sorting();//http://isotope.metafizzy.co/
		//http://www.position-absolute.com/articles/jquery-form-validator-because-form-validation-is-a-mess/
        jQuery("#formID1").validationEngine('attach', {promptPosition : "centerRight"});
		//basic row cloning
		$('.clone').click(function(){
        	$(this).parents("form").find('.row:last').clone().css({display: 'none'}).insertBefore(".clone-ctrls").slideDown(400);
        });
		
});

		function ezi_sorting(){
			if(jQuery('#media-type-1').length > 0){
				var $container = $('#media-type-1');
				// filter buttons
				$('#filters a').click(function(){
					var selector = $(this).attr('data-filter');
					$container.isotope({ filter: selector });
					return false;
				});    
				// switches selected class on buttons
				$('.filter-by-cat').find('a').click(function(){
					var $this = $(this);
			
					// don't proceed if already selected
					if ( !$this.hasClass('selected') ) {
						$this.parents('.filter-by-cat').find('.selected').removeClass('selected');
						$this.addClass('selected');
					}
			   });
				$(function(){
				  $container.isotope({
					itemSelector : '.allmedia'
				  });
				  
				});
			}
		}
		function ezi_calendar(){
			if(jQuery('#calendar').length > 0){
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();
				
				var calendar = $('#calendar').fullCalendar({
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay'
					},
					selectable: true,
					selectHelper: true,
					select: function(start, end, allDay) {
						var title = prompt('Event Title:');
						if (title) {
							calendar.fullCalendar('renderEvent',
								{
									title: title,
									start: start,
									end: end,
									allDay: allDay
								},
								true // make the event "stick"
							);
						}
						calendar.fullCalendar('unselect');
					},
					editable: true,
					events: [
						{
							title: 'All Day Event',
							start: new Date(y, m, 1)
						},
						{
							title: 'Long Event',
							start: new Date(y, m, d-5),
							end: new Date(y, m, d-2)
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d-3, 16, 0),
							allDay: false
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d+4, 16, 0),
							allDay: false
						},
						{
							title: 'Meeting',
							start: new Date(y, m, d, 10, 30),
							allDay: false
						},
						{
							title: 'Lunch',
							start: new Date(y, m, d, 12, 0),
							end: new Date(y, m, d, 14, 0),
							allDay: false
						},
						{
							title: 'Birthday Party',
							start: new Date(y, m, d+1, 19, 0),
							end: new Date(y, m, d+1, 22, 30),
							allDay: false
						},
						{
							title: 'Click for Google',
							start: new Date(y, m, 28),
							end: new Date(y, m, 29),
							url: 'http://google.com/'
						}
					]
				});
			}
		}
        function ezi_forms_upload(){
			$('input[type=file]').each(function(){
			
				var uploadbuttonlabeltext = $(this).attr('title'); //get title attribut for languagesettings
				if(uploadbuttonlabeltext == ''){
				  var uploadbuttonlabeltext = 'Upload';
				}
				
				var uploadbutton = '<input type="button" class="button_button" value="'+uploadbuttonlabeltext+'" />';
				 $(this).wrap('<div class="fileinputs"></div>');
				  $(this).addClass('file').css('opacity', 0); //set to invisible
				  $(this).parent().append($('<div class="fakefile" />').append($('<input type="text" />').attr('id',$(this).attr('id')+'__fake')).append(uploadbutton));
				
				  $(this).bind('change', function() {
					$('#'+$(this).attr('id')+'__fake').val($(this).val());;
				  });
				  $(this).bind('mouseout', function() {
					$('#'+$(this).attr('id')+'__fake').val($(this).val());;
				  });
		  });
	  }
	  /* -- */
	  function ezi_treeview(){
			$("#browser").treeview();
			
			$("#tree").treeview({
				collapsed: true,
				animated: "fast",
				control:"#sidetreecontrol",
				prerendered: true,
				persist: "location"
			});
		}
		/* -- */
        function ezi_equalHeight(group) {
			tallest = 0;
			group.each(function() {
				thisHeight = jQuery(this).height();
				if(thisHeight > tallest) {
					tallest = thisHeight;
				}
			});
			group.height(tallest);
		}
		/* -- */
        function ezi_autocomplete(){
			var availableTags = [
				"ActionScript","AppleScript","Asp","BASIC","C",
				"C++","Clojure","COBOL","ColdFusion","Erlang",
				"Fortran","Groovy","Haskell","Java","JavaScript",
				"Lisp","Perl","PHP","Python","Ruby","Scala","Scheme"
			];
			jQuery( "#input-s" ).autocomplete({ source: availableTags });				
		}
		/* -- */
        function ezi_tablesorter(){
        	jQuery("#tablesorter-contact").tablesorter({ headers: { 0: { sorter: false }, 6: { sorter: false } } });
			jQuery("#tablesorter-tickets").tablesorter({ headers: { 0: { sorter: false } } }); 
		}	
        /* -- */
		function ezi_tweets(){
			jQuery("#tweets_list").tweet({
			  avatar_size: 32,
			  count: 6,
			  username: "envatowebdev",
			  list: "envato",
			  loading_text: "loading tweets...",
			  refresh_interval: 60
			});
			jQuery("#tweets_user").tweet({
			  avatar_size: 32,
			  count: 5,
			  username: "MarkDijkstra",
			  loading_text: "loading tweets...",
			  refresh_interval: 60
			});
			jQuery("#tweets_user_2").tweet({
			  avatar_size: 32,
			  count: 5,
			  username: "wdtuts",
			  loading_text: "loading tweets...",
			  refresh_interval: 60
			});
			jQuery("#tweets_list_2").tweet({
			  avatar_size: 32,
			  count: 6,
			  username: "@TroyHector",
			  list: "design",
			  loading_text: "loading tweets...",
			  refresh_interval: 60
			});
		}
        /* -- */
		function ezi_toggle_mode(){
			jQuery(".simod-page-btn-1").click(function(){
				jQuery(".pages-admod-box-1").delay(200).fadeIn(500);
				jQuery(".pages-head-1").css({height: '77px'},function(){
				});
				jQuery(".admod-page-btn-1").removeClass("hide");
				jQuery(".simod-page-btn-1").addClass("hide");
			});
			jQuery(".admod-page-btn-1").click(function(){
				jQuery(".pages-admod-box-1").fadeOut(500,function(){
					jQuery(".pages-head-1").css({height: '36px'});
				});
				jQuery(".simod-page-btn-1").removeClass("hide");
				jQuery(".admod-page-btn-1").addClass("hide");
			});
		}
        /* -- */
		function ezi_tooltips(){
			jQuery('.tip').tipsy({ gravity: 's' }); // nw | n | ne | w | e | sw | s | se
		}
		/* -- */							
		function ezi_spinner(){
			// add an spinner to the headers of a box
			// pure an visual effect
			// add an spinner images to all headers of a box
			jQuery(".box-header-ctrls").prepend('<span class="spin" alt=""></span>');
			jQuery(".close, .focus").click(function(){									   
				jQuery(this).parent(".box-header-ctrls").find("span.spin").fadeIn(400).show(600, function(){
					jQuery("span.spin").fadeOut(350);
				});			
			});		
		}
		/* -- */
		function ezi_forms_checkbox_radio(){
			//checkboxes, radio
			jQuery(".cb-enable").click(function(){
				var parent = jQuery(this).parents('.switch');
				jQuery('.cb-disable',parent).removeClass('selected');
				jQuery(this).addClass('selected');
				jQuery('.checkbox',parent).attr('checked', true);
			});
			jQuery(".cb-disable").click(function(){
				var parent = jQuery(this).parents('.switch');
				jQuery('.cb-enable',parent).removeClass('selected');
				jQuery(this).addClass('selected');
				jQuery('.checkbox',parent).attr('checked', false);
			});
		}	
        /* -- */
		function ezi_toggle_box(){
			//close all
			jQuery(".togglecloseall").click(function(){
				jQuery(".box-content, .box-content-25, .box-content-50, .box-content-75").slideUp();
				jQuery(".box-header-ctrls .close").removeClass("close").addClass("open");
			});
			//open all
			jQuery(".toggleopenall").click(function(){
				jQuery(".box-content, .box-content-25, .box-content-50, .box-content-75").slideDown();
				jQuery(".box-header-ctrls .open").removeClass("open").addClass("close");
			});	
			//close or open 1 box
			jQuery(".box-header-ctrls .close").click(function(){
				jQuery(this).parents(".box-header, .box-header-25, .box-header-50, .box-header-75").next(".box-content, .box-content-25, .box-content-50, .box-content-75").slideToggle(200);
			});	
			//switching the button
			jQuery(".box-header-ctrls a.close").click(function(){
														  
				var btnclass = jQuery(this).attr("class");
				
				if(btnclass == "open"){
					jQuery(this).removeClass("open").addClass("close");	
				}else{
					jQuery(this).removeClass("close").addClass("open");	
				}
			});
			
			jQuery("#toggle-menu").click(function(){
				jQuery('#submenu, #newmenu').slideToggle(400);
				
				var btnclass = jQuery(this).attr("class");
				
				if(btnclass == "open"){
					jQuery(this).removeClass("open").addClass("close");	
				}else{
					jQuery(this).removeClass("close").addClass("open");	
				}
			});
		}	
		/* -- */		
        function ezi_jqueryui(){
			//portlets new in 1.7
			$(".column").sortable({
				connectWith: ".column"
			});
			$(".portlet").addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
				.find(".portlet-header").addClass( "ui-widget-header ui-corner-all" ).prepend( "<span class='ui-icon ui-icon-minusthick'></span>").end().find( ".portlet-content" );
			$(".portlet-header .ui-icon").click(function() {
				$(this).toggleClass( "ui-icon-minusthick" ).toggleClass( "ui-icon-plusthick" );
				$(this).parents( ".portlet:first" ).find( ".portlet-content" ).toggle();
			});
			$(".column").disableSelection();
					
			//tabs
			jQuery(".tabs-wrapper-hori").tabs({
				collapsible: false,
				fx: {
				  duration: 300,
				  height: 'toggle'
				}						  
			});
			//jQuery(".tabs-wrapper-veri").tabs();
			//datepicker
			jQuery( "#datepicker, #datepicker2" ).datepicker({
				showOn: "button",
				buttonImage: "images/style1/calendar.png",
				//buttonImage: "images/style2/calendar.png",
				//buttonImage: "images/style3/calendar.png",
				//buttonImage: "images/style4/calendar.png",
				//buttonImage: "images/style5/calendar.png",
				//buttonImage: "images/style6/calendar.png",
				//buttonImage: "images/style7/calendar.png",
				buttonImageOnly: true,
				buttonText: "choose"
		    });
			//first jquery ui modal (demo dialog used on dialog.html)
			jQuery("#dialog-message").dialog({
				autoOpen: false,//remove this and the click to aut oopen
				bgiframe: true,
				height: 160,
				width: 500,
				modal: true,
				buttons: {
						  Ok: function() {
							  jQuery(this).dialog('close');
							  }
						 }
			});
			jQuery('a.open-dialog-message').click(function() {
				jQuery('#dialog-message').dialog('open');
			    return false;
		    });
			//second jquery ui (demo dialog used on dialog.html)
			jQuery("#dialog-confirm").dialog({
				autoOpen: false,//remove this and the click to aut oopen
				resizable: false,
				height:154,
				modal: true,
				buttons: {
					'Delete all items': function() {
						jQuery(this).dialog('close');
					},
					Cancel: function() {
						jQuery(this).dialog('close');
					}
				}
			});
			jQuery('a.open-dialog-confirm').click(function() {
				jQuery('#dialog-confirm').dialog('open');
			    return false;
		    });
			//add contacts modal
			jQuery("#add-contacts-dialog").dialog({
				autoOpen: false,//remove this and the click to aut oopen
				bgiframe: false,
				height: 321,
				width: 400,
				modal: true,
				resizable: false
			});
			jQuery('#open-contacts-dialog-btn, #open-contacts-dialog-btn-tb').click(function() {
				jQuery('#add-contacts-dialog').dialog('open');
			    return false;
		    });
			//add contacts modal
			jQuery("#add-comments-dialog").dialog({
				autoOpen: false,//remove this and the click to aut oopen
				bgiframe: true,
				height: 398,
				width: 400,
				modal: true,
				resizable: false
			});
			jQuery('#open-comments-dialog-btn').click(function() {
				jQuery('#add-comments-dialog').dialog('open');
			    return false;
		    });			
			//add tickets modal
			jQuery("#add-tickets-dialog").dialog({
				autoOpen: false,//remove this and the click to aut oopen
				bgiframe: true,
				height: 463,
				width: 400,
				modal: true,
				resizable: false
			});
			jQuery('#open-ticket-dialog-btn, #open-ticket-dialog-btn-tb').click(function() {
				jQuery('#add-tickets-dialog').dialog('open');
			    return false;
		    });
            // extra cancel or close button used in non-demo dialogs
			jQuery('.close-dialog').click(function() {
				jQuery('.ui-dialog-content').dialog('close');
			    return false;
		    });	
			//progressbar
			jQuery(".progressbar-1").progressbar({value: 0});
			jQuery(".progressbar-2").progressbar({value: 0});
			jQuery(".progressbar-3").progressbar({value: 0});
		    jQuery(".progressbar-4").progressbar({value: 0});
			
			jQuery(".progressbar-1 .ui-progressbar-value").animate({width:'50%'}, 2000);
			jQuery(".progressbar-2 .ui-progressbar-value").animate({width:'75%'}, 2000);
			jQuery(".progressbar-3 .ui-progressbar-value").animate({width:'90%'}, 2000);
			jQuery(".progressbar-4 .ui-progressbar-value").animate({width:'40%'}, 2000);
			//slider
			jQuery(".ui-slider-1").slider({
			value: 37,
			min: 1,
			max: 700,
			animate: false,
			slide: function(event, ui) {
				jQuery("#amount").val('$' + ui.value);
			}
		});
		jQuery("#amount").val('$' + jQuery(".ui-slider-1").slider("value"));
		
		jQuery( "#accordion" ).accordion();
		}
		/* -- */
		function ezi_dd_menu(){	
            //dropdown menu
			jQuery("ul#menu li").hover(function(){
				jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(10);
			}, function(){
				jQuery('ul:first',this).hide(0, function(){ 
				   jQuery('ul:first',this).css('visibility', 'hidden');
				});
			});
			// add an active class to the parent li
			jQuery(".second").hover(function(){
				jQuery(this).parent("li").find("a").addClass("activeli");							
			}, function(){
				jQuery(this).parent("li").find("a").removeClass("activeli");	
			});			
			//finding the parent li and add an arrow(icon) when the dropdown is active
			jQuery(".second").parent("li").find("a:first").append('<span/>');
			jQuery("#menu li a").hover(function(){
				jQuery(this).find("span").show();								  
			},function(){
				jQuery(this).find("span").hide();
		    });
			jQuery("#menu li ul").hover(function(){
				jQuery(this).prev("a").find("span").show();								  
			},function(){
				jQuery(this).prev("a").find("span").hide();
		    });
		}
		/* -- */		
		function ezi_dialogs(){
			// Remove and highlighting the dialog boxes inside a box
			jQuery(".delx-box").click(function() {
				jQuery(this).parent("div").fadeTo("fast", 0.0).slideUp(400);			
			},function () {
				jQuery(this).parent("div").remove();
			});			
			
			// Remove and highlighting the dialog boxes outside a box
			jQuery(".dialog-box-succes-big, .dialog-box-warning-big, .dialog-box-error-big, .dialog-box-info-big, .dialog-box-msg-big, .dialog-box-succes-small, .dialog-box-warning-small, .dialog-box-error-small, .dialog-box-info-small, .dialog-box-msg-small").click(function() {
				jQuery(this).fadeTo("fast", 0.0).slideUp(400);			
			},function () {
				jQuery(this).remove();
			});

			// show and hide tip msg in the dialog boxes
			jQuery(".dialog-box-succes-big, .dialog-box-warning-big, .dialog-box-error-big, .dialog-box-info-big, .dialog-box-msg-big, .dialog-box-succes-small, .dialog-box-warning-small, .dialog-box-error-small, .dialog-box-info-small, .dialog-box-msg-small").hover(function() {
				jQuery(this).children(".delx").show();
			},function () {
				jQuery(this).children(".delx").hide();	
			});	
			
		}
		/* -- */
		function ezi_show_ctrls(){	
			// (media 1) - show ctrls when hovered
			jQuery("ul#media-type-1 li").hover(function(){
				jQuery(this).find("span").show(10);
			}, function(){
				jQuery(this).find("span").hide(10);
			});
		}
		/* -- */
		function ezi_del_rows(){			
			// (all contacts) - deleting a row	
			jQuery(".delete-contact").click(function() {
				jQuery(this).parents("li, tr").fadeTo("fast", 0.0).slideUp(400);			
			},function () {
				jQuery(this).parents("li, tr").remove();
			});	
			 // (all media) -  deleting media(lights up(red) before it's gone)
			jQuery("a.delete-media").click(function(){
				jQuery(this).parents("li").addClass("media-delete").fadeOut("slow", function(){
					jQuery(this).parents("li").remove();											   
				});
			});
			// (all comments) - deleting a row
			jQuery(".delete-comments").click(function() {
				jQuery(this).parents("li").fadeTo("fast", 0.0).slideUp(400);			
			},function () {
				jQuery(this).parents("li").remove();
			});	
		}
		/* -- */
		function ezi_lightbox(){
			jQuery().piroBox({
				my_speed: 300, //animation speed
				bg_alpha: 0.3, //background opacity
				slideShow : true, // true == slideshow on, false == slideshow off
				slideSpeed : 4, //slideshow
				close_all : '.piro_close, .piro_overlay' // add class .piro_overlay(with comma)if you want overlay click close piroBox
			});
		}
        /* -- */
		function ezi_scroll_top(){
			jQuery('#top').click(function() {
            	jQuery('html, body').animate({scrollTop:0}, 'slow');
            });
        }
		/* -- */		
        function ezi_forms_select(){
			jQuery(".select-1, .select-2, .search-select").select_skin();
		}
		/* -- */
		function ezi_checkAll(){
 			jQuery('.toggle-all-cbox').click(function () {
  				jQuery(this).parents('.box-content').find('input:checkbox').attr('checked', jQuery(this).attr('checked'));
 			});
		}	
		/* -- */	
        function ezi_browser_dec(){
		   //styling up some elements in google chrome, there is no way to do this in the css, so we use jquery.
		   if(jQuery.browser.webkit){
			   jQuery('input.inbox-sf-search-btn, input.inbox-sf-add-btn').css({'padding-top' : '2px'});
			   jQuery('div.bulk-actions input').css({'padding-top' : '4px'});
			   jQuery('div.box-content ul.tabs-ctrls-hori li a').css({'padding-top' : '11px'});
		   }
           if(jQuery.browser.opera){
			 jQuery('div.box-content ul.tabs-ctrls-hori li a').css({'padding-top' : '11px'});  
		   }
	    }
        /* -- */
		//jquery editor more info @ http://www.leigeber.com/2010/02/javascript-wysiwyg-editor/	
		// there's no function for this, please do not change this
		// otherwise the editor will not work propper with 
		// other jquery stuff
		if(jQuery('#editor').length > 0){
			// first editor		
			new TINY.editor.edit('editor',{
				id:'editor',
				width:976,
				height:175,
				cssclass:'te',
				controlclass:'tecontrol',
				rowclass:'teheader',
				dividerclass:'tedivider',
				controls:['bold','italic','underline','strikethrough','|','subscript','superscript','|',
						  'orderedlist','unorderedlist','|','outdent','indent','|','leftalign',
						  'centeralign','rightalign','blockjustify','|','unformat','|','undo','redo','n',
						  'font','size','style','|','image','hr','link','unlink','|','cut','copy','paste','print'],
				footer:true,
				fonts:['Verdana','Arial','Georgia','Trebuchet MS'],
				xhtml:true,
				cssfile:'editor.css',
				bodyid:'editor',
				footerclass:'tefooter',
				toggle:{text:'source',activetext:'wysiwyg',cssclass:'toggle'},
				resize:{cssclass:'resize'}
			});
		}
		if(jQuery('#editor2').length > 0){	
			//second editor			 
			new TINY.editor.edit('editor2',{
				id:'editor2',
				width:696,
				height:223,
				cssclass:'te',
				controlclass:'tecontrol',
				rowclass:'teheader',
				dividerclass:'tedivider',
				controls:['bold','italic','underline','strikethrough','|','subscript','superscript','|',
						  'orderedlist','unorderedlist','|','outdent','indent','|','leftalign',
						  'centeralign','rightalign','blockjustify','|','unformat','|','undo','redo','n',
						  'font','size','style','|','image','hr','link','unlink','|','cut','copy','paste','print'],
				footer:true,
				fonts:['Verdana','Arial','Georgia','Trebuchet MS'],
				xhtml:true,
				cssfile:'editor.css',
				bodyid:'editor',
				footerclass:'tefooter',
				toggle:{text:'source',activetext:'wysiwyg',cssclass:'toggle'},
				resize:{cssclass:'resize'}
			});
		}
			
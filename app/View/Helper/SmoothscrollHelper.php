<?php
/**
*@ Smooth DIV Scroll Plugin for CakePHP
*@ Date : 8/2/2012
*@ Javascript used : smoothDivScroll
*@ Support Javascript Homepage : http://www.maaki.com/thomas/SmoothDivScroll
*@ Special thank to script's author and Jquery
*
* @@ Plugin coverter : Niceit - tuantinhoc@yahoo.com
*/
    //Javascript file require

    $Path = dirname(__FILE__);
    $Path = str_replace("\\", "/", $Path);
    $Path = str_replace("View/Helper", "", $Path);

    define ('UI_SCRIPT', $Path . "webroot/js/jquery.ui.widget.js");
    define ('SMOOTH_SCRIPT', $Path . "webroot/js/jquery.smoothDivScroll-1.1.js");
    define ('CSS_STYLE', $Path . "webroot/css/smoothDivScroll.css");

    class SmoothscrollHelper extends HtmlHelper{

        var $helpers = array('Html');

        private $divID = "";
        private $options = array();

        function SmoothDivScroller($id = "", $options = ""){
            if ($this->_checkExistFile()){
                if (!empty($id)){

                    //If options is null or isnt valid format, it will load with default
                    if (empty($options) || !is_array($options))
                        $this->options = array(
                            'autoScroll' => 'always',
                            'autoScrollDirection' => 'backandforth',
                            'autoScrollStep' => 1,
                            'autoScrollInterval' => 80,
                            'startAtElementId' => 'startAtMe',
                            'visibleHotSpots' => 'always'
                        );
                    else $this->options = $options;
                    $this->divID = $id;

                    $this->_initFile();
                    $this->_TakeScript();
                }
                else echo "<script>alert('Smooth Scroller - Div id require !'); </script>";
            }
            else echo "<script>alert('Cant Run ! Please check JS Files and CSS files are exist first !');</script>";
        }

        /**
         * Check Jquery already loaded ?
        */
        function _checkJqueryLoaded(){

        }

        /**
         * @Requirement files
        */
        function _checkExistFile(){
            if (!file_exists(UI_SCRIPT)) return FALSE;
            if (!file_exists(SMOOTH_SCRIPT)) return FALSE;
            if (!file_exists(CSS_STYLE)) return FALSE;
            return TRUE;
        }



        /**
         * @ Init Javascript and Css files
        */
        function _initFile(){
            echo $this->Html->css('/smooth_scroll/css/smoothDivScroll');
            echo $this->Html->script(array('/smooth_scroll/js/jquery.ui.widget', '/smooth_scroll/js/jquery.smoothDivScroll-1.1.js'));
        }

        /**
         * @Take script
        */
        function _TakeScript(){
            $content = "<script>";

            //Onready document, script will excute
            $content .= "$(function(){";
            $content .= '   $("div#' . $this->divID . '").smoothDivScroll({';
                    //init option values for script
                    $Leng = count($this->options);
                    $i = 0;
                    foreach ($this->options as $key => $value){
                        $content .= $key . ": ";
                        if (is_numeric($value)) $content .= $value;
                        else $content .= '"' . $value . '"';
                        ++$i;
                        if ( $i < $Leng) $content .= ", \n";
                    }
                    //
            $content .= "});";
            $content .= "});";
            $content .= "</script>";

            echo $content;
        }
    }
?>
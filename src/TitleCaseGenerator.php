<?php
    class TitleCaseGenerator
    {
            function makeTitleCase($input_title)
            {
                $articles = array("a", "an", "the", "and", "but", "or", "for", "nor", "on", "at", "to", "from", "by");
                $input_lowercase = strtolower($input_title);
                $input_array_of_words = explode(" ", $input_lowercase);

                $output_titlecased = array();

                foreach ($input_array_of_words as $key => $word) {

                    if (!in_array($word, $articles) || $key == 0) {
                        array_push($output_titlecased, ucfirst($word));
                    }
                    else {
                        array_push($output_titlecased, $word);
                    }
                }

                return implode(" ", $output_titlecased);
            }

            //array( '0' => "the", '1' => "little", '2' => 'mermaid');
    }

?>

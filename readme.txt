=== Syntax Highlighter with PrismJS ===
Contributors: mwaelk
Donate link: https://www.paypal.com/donate?hosted_button_id=QHHP2H5JN358N
Tags: highlighter, prism, syntax highlighter
Tested up to: 6.1
Stable tag: 0.0.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A syntax highlighter using PrismJs. 


== How To Use ==

Wrap your pre tag as shown below:

<pre>
[sh_prismjs_pre class="language-py line-numbers match-braces rainbow-braces" data_line="1,4-5,7" escape_html='escape']
&lt;pre>    
class Implements_Ne:
    ''' A class which implements 
        the __ne__ method '''
    def __ne__( self, other):
        return False

class Not_Implements_Ne:
    ''' A class which does not
        implement the __ne__
        method '''
    pass
&lt;/pre>
[/sh_prismjs_pre]
</pre>


* Replace name in language-NAME, by the name of the language that you wish to highlight. For example if the language is python, language-NAME should become language-py .
* If you wish line numbers to appear, use line-numbers . 
* If you wish braces to be matched when selected use match-braces . 
* If you wish to have rainbow braces use rainbow-braces . 
* If you wish to highlight lines, you can use data_line, so in the example provided, colorize line 1, and colorize lines from 4 to 5, and colorize line 7. 
* If you wish the content of the pre to be escaped, so for example if it contains html tags that you do not wish to be rendered, you can use escape_html='escape'

For code tags, they also should be wrapped as follows:

<pre>
[sh_prismjs_code class="language-html" escape_html='escape']&lt;code>tag: &lt;br/>&lt;/code>[/sh_prismjs_code]
</pre>

You must use the language-Name option, and you can use the escape_html option. 


== Screenshots ==

1. Python with lines numbers and lines highlight
2. Java without line numbers 
3. Java with rainbow braces and line numbers 
4. Code escaped automatically


== Changelog ==
= 0.0.1 =
  * initial release.




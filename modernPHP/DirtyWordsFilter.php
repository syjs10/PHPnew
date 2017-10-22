<?php
/**
 *
 */
class DirtyWordsFilter extends php_user_filter
{

    public function filter($in, $out, &$consumed, $closing)
    {
       $words = array('grime', 'dire', 'grease');
       $wordData = array();
       foreach ($words as $word) {
           $replacement = array_fill(0, mb_strlen($word), '*');
           $wordData[$word] = implode('', $replacement);
       }
       $bad = array_keys($wordData);
       $good = array_values($wordData);
       while ($bucket = stream_bucket_make_writeable($in)) {
           $bucket->data = str_replace($bad, $good, $bucket->data);
           $consumed += $bucket->datalen;
           stream_bucket_append($out, $bucket);
       }
       return PSFS_PASS_ON;
    }
}
stream_filter_register('dirty_words_filter', 'DirtyWordsFilter');
// Use custom filter
$handle = fopen('data.txt', 'rb');
stream_filter_append($handle, 'dirty_words_filter');
while (feof($handle) !== true) {
    echo fgets($handle);
}
fclose($handle);
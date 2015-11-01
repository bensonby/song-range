<!DOCTYPE html>
<html>
<head>
   <!-- midi.js package -->
   <script src="js/MIDI/AudioDetect.js" type="text/javascript"></script>
   <script src="js/MIDI/LoadPlugin.js" type="text/javascript"></script>
   <script src="js/MIDI/Plugin.js" type="text/javascript"></script>
   <script src="js/MIDI/Player.js" type="text/javascript"></script>
   <script src="js/Window/DOMLoader.XMLHttp.js" type="text/javascript"></script>
   <script src="js/Window/DOMLoader.script.js" type="text/javascript"></script>
   <!-- extras -->
   <script src="inc/Base64.js" type="text/javascript"></script>
   <script src="inc/base64binary.js" type="text/javascript"></script>

  <meta name="viewport" content="width=device-width, initial-scale=0.3">
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>男女歌手流行曲音域</title>
  <style type="text/css">
    #share-buttons { text-align: center; }
  </style>
  <link href="song.css" rel="stylesheet" type="text/css" media="all">
  <link href="keyboard.css" rel="stylesheet" type="text/css" media="all">
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script type="text/javascript">stLight.options({publisher: "389a4b20-2d68-4786-804c-97b3e3061c71", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<body>

<div id="keyboard">
<div class="note white-note" id="note-f1"  >F1<div></div></div>
<div class="note black-note" id="note-fis1">F#1<div></div></div>
<div class="note white-note" id="note-g1"  >G1<div></div></div>
<div class="note black-note" id="note-gis1">G#1<div></div></div>
<div class="note white-note" id="note-a1"  >A1<div></div></div>
<div class="note black-note" id="note-ais1">A#1<div></div></div>
<div class="note white-note" id="note-b1"  >B1<div></div></div>
<div class="note white-note" id="note-c2"  >C2<div></div></div>
<div class="note black-note" id="note-cis2">C#2<div></div></div>
<div class="note white-note" id="note-d2"  >D2<div></div></div>
<div class="note black-note" id="note-dis2">D#2<div></div></div>
<div class="note white-note" id="note-e2"  >E2<div></div></div>
<div class="note white-note" id="note-f2"  >F2<div></div></div>
<div class="note black-note" id="note-fis2">F#2<div></div></div>
<div class="note white-note male-range" id="note-g2">G2<div></div></div>
<div class="note black-note" id="note-gis2">G#2<div></div></div>
<div class="note white-note male-range" id="note-a2">A2<div></div></div>
<div class="note black-note" id="note-ais2">A#2<div></div></div>
<div class="note white-note male-range" id="note-b2">B2<div></div></div>
<div class="note white-note male-range" id="note-c3">C3<div></div></div>
<div class="note black-note" id="note-cis3">C#3<div></div></div>
<div class="note white-note male-range" id="note-d3">D3<div></div></div>
<div class="note black-note" id="note-dis3">D#3<div></div></div>
<div class="note white-note male-range" id="note-e3"  >E3<div></div></div>
<div class="note white-note male-range female-range" id="note-f3"  >F3<div></div></div>
<div class="note black-note" id="note-fis3">F#3<div></div></div>
<div class="note white-note male-range female-range on" id="note-g3"  >G3<div></div></div>
<div class="note black-note" id="note-gis3">G#3<div></div></div>
<div class="note white-note male-range female-range" id="note-a3"  >A3<div></div></div>
<div class="note black-note" id="note-ais3">A#3<div></div></div>
<div class="note white-note male-range female-range" id="note-b3"  >B3<div></div></div>
<div class="note white-note male-range female-range" id="note-c4"  >C4<div></div></div>
<div class="note black-note" id="note-cis4">C#4<div></div></div>
<div class="note white-note male-range female-range" id="note-d4"  >D4<div></div></div>
<div class="note black-note" id="note-dis4">D#4<div></div></div>
<div class="note white-note male-range female-range" id="note-e4"  >E4<div></div></div>
<div class="note white-note male-range female-range" id="note-f4"  >F4<div></div></div>
<div class="note black-note" id="note-fis4">F#4<div></div></div>
<div class="note white-note male-range female-range" id="note-g4"  >G4<div></div></div>
<div class="note black-note" id="note-gis4">G#4<div></div></div>
<div class="note white-note male-range female-range" id="note-a4"  >A4<div></div></div>
<div class="note black-note" id="note-ais4">A#4<div></div></div>
<div class="note white-note female-range" id="note-b4"  >B4<div></div></div>
<div class="note white-note female-range" id="note-c5"  >C5<div></div></div>
<div class="note black-note" id="note-cis5">C#5<div></div></div>
<div class="note white-note female-range" id="note-d5"  >D5<div></div></div>
<div class="note black-note" id="note-dis5">D#5<div></div></div>
<div class="note white-note" id="note-e5"  >E5<div></div></div>
<div class="note white-note" id="note-f5"  >F5<div></div></div>
<div class="note black-note" id="note-fis5">F#5<div></div></div>
<div class="note white-note" id="note-g5"  >G5<div></div></div>
<div class="note black-note" id="note-gis5">G#5<div></div></div>
<div class="note white-note" id="note-a5"  >A5<div></div></div>
<div class="note black-note" id="note-ais5">A#5<div></div></div>
<div class="note white-note" id="note-b5"  >B5<div></div></div>
<div class="note white-note" id="note-c6"  >C6<div></div></div>
</div>
<?php
  $data = file('songs.txt');
  for($i=0; $i<count($data); $i++){
    $song_info[$i] = explode(';', trim($data[$i]));
  }
?>

<div id="legend">
 <div id="male-key"> </div> <span class="key">男歌手慣常音域</span>
 <div id="female-key"> </div> <span class="key">女歌手慣常音域</span>
 <div id="song-key"> </div> <span class="key">節錄歌詞音域</span>
 <div id="full-song-key"> </div> <span class="key">整首歌曲音域</span>
</div>


<div id="song-holder">
<?php
  foreach($song_info as $song){
    $extreme_notes = get_extreme_notes($song[3]);
?>
  <div class="song <?=note_to_css_str($song[1])?> <?=$song[5]?>">
    <div class="lownote">
      <span class="word"><?=$extreme_notes["lowest"][1]?></span>
      <span class="notename"><?=$extreme_notes["lowest"][0]?></span>
    </div>
    <div class="highnote">
      <span class="word"><?=$extreme_notes["highest"][1]?></span>
      <span class="notename"><?=$extreme_notes["highest"][0]?></span>
    </div>
    <div class="title"><?=$song[2]?> <a title="Youtube" target="_blank" href="<?=str_replace('&', '&amp;', $song[4])?>"><img src="youtube_icon_tn.png" width="23" height="16" alt="Listen" /></a></div>
    <div class="lyrics"><?=parse_lyrics($song[3])?></div>
    <span class="fulllownote"><?=$song[0]?></span><span class="fullhighnote"><?=$song[1]?></span>
  </div>
<?php } ?>
  <div style="clear: both;"></div>
</div>

 <div id="share-buttons">
  <span class='st_facebook_hcount' displayText='Facebook'></span>
  <span class='st_twitter_hcount' displayText='Tweet'></span>
  <span class='st_googleplus_hcount' displayText='Google +'></span>
 </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript">
  var notesList = [
    'f1', 'fis1', 'g1', 'gis1', 'a1', 'ais1', 'b1',
    'c2', 'cis2', 'd2', 'dis2', 'e2', 'f2', 'fis2', 'g2', 'gis2', 'a2', 'ais2', 'b2',
    'c3', 'cis3', 'd3', 'dis3', 'e3', 'f3', 'fis3', 'g3', 'gis3', 'a3', 'ais3', 'b3',
    'c4', 'cis4', 'd4', 'dis4', 'e4', 'f4', 'fis4', 'g4', 'gis4', 'a4', 'ais4', 'b4',
    'c5', 'cis5', 'd5', 'dis5', 'e5', 'f5', 'fis5', 'g5', 'gis5', 'a5', 'ais5', 'b5',
    'c6'
  ];
  $('.song').on('mouseenter', function(evt){
    //sentence range
    var lyrics_lowestnote = $(this).find('.lownote .notename').html().replace('#', 'is').toLowerCase();
    var lyrics_highestnote = $(this).find('.highnote .notename').html().replace('#', 'is').toLowerCase();
    var lyrics_lowestword = $(this).find('.lownote .word').html();
    var lyrics_highestword = $(this).find('.highnote .word').html();
    //full song range
    var song_lowestnote = $(this).find('.fulllownote').html().replace('#', 'is').toLowerCase();
    var song_highestnote = $(this).find('.fullhighnote').html().replace('#', 'is').toLowerCase();
    
    highlight_keyboard(lyrics_lowestnote, lyrics_highestnote, song_lowestnote, song_highestnote);
  });
  function highlight_keyboard(lyrics_low, lyrics_high, song_low, song_high){
    var lyrics_from = notesList.indexOf(lyrics_low);
    var lyrics_to = notesList.indexOf(lyrics_high);
    var song_from = notesList.indexOf(song_low);
    var song_to = notesList.indexOf(song_high);
    for(var i=song_from; i<=song_to; i++) $('#note-'+notesList[i]+' div').addClass('song-range');
    for(var i=lyrics_from; i<=lyrics_to; i++) $('#note-'+notesList[i]+' div').removeClass('song-range').addClass('lyrics-range');
    $('#note-'+notesList[lyrics_from]+' div').addClass('start');
    $('#note-'+notesList[lyrics_to]+' div').addClass('end');
  }

  $('.song').on('mouseleave', function(evt){
    $('.lyrics-range').removeClass('lyrics-range');
    $('.song-range').removeClass('song-range');
    $('.start').removeClass('start');
    $('.end').removeClass('end');
  });

  $('.lyrics-word').on('mouseover', function(evt){
    var note = getNoteFromLyricsWord(this);
    $('#note-'+note+' div').addClass('on');
  });
  $('.lyrics-word').on('mouseleave', function(evt){
    var note = getNoteFromLyricsWord(this);
    $('#note-'+note+' div').removeClass('on');
  });
  $('.lyrics-word').on('mousedown', function(evt){
    var note = getNoteFromLyricsWord(this);
    var midiNote = getMidiNoteFromNoteName(note);
    console.log("on: " + midiNote);
    MIDI.noteOn(0, midiNote, 127, 0);
    MIDI.noteOff(0, midiNote, 0.75);
  });
  $(document).on('mouseup', function(evt){
    console.log('mouseup fired!');
    for(var i=21; i<=108; i++){
      MIDI.noteOff(0, i, 0.5);
    }
  });
  function getNoteFromLyricsWord(element){
    return jQuery.grep($(element).attr("class").split(' '), function(className){ return className != 'lyrics-word'; })[0];
  }
  function getMidiNoteFromNoteName(note){
    var noteWithoutSharp = MIDI.keyToNote[note.replace('is', '').toUpperCase()];
    var noteIsSharp = note.length > 2;
    return noteWithoutSharp + (noteIsSharp ? 1 : 0);
  }
 
</script>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-417192-7', 'tungsten.hk');
  ga('send', 'pageview');

</script>
<script type="text/javascript">

window.onload = function () {
	MIDI.loadPlugin({
		soundfontUrl: "soundfont/",
		instrument: "acoustic_grand_piano",
		callback: function() {
      console.log("MIDI player loaded");
		}
	});
};


</script>
</body>
</html><?php
function note_to_css_str($note){
  return str_replace('#', 'is', strtolower($note));
}
function parse_lyrics($lyrics){
  $parsed_lyrics = "";
  $words = explode('|', $lyrics);
  foreach($words as $word){
    if(strpos($word, '-') === false){
      $parsed_lyrics .= $word;
      continue;
    }
    list($note, $character) = explode('-', $word);
    $parsed_lyrics .= "<span class='lyrics-word ".note_to_css_str($note)."'>$character</span>";
  }
  return $parsed_lyrics;
}
function get_extreme_notes($lyrics){
  $highest_note = array("A0", "");
  $lowest_note =  array("C8", "");
  $words = explode('|', $lyrics);
  foreach($words as $word){
    if(strpos($word, '-') === false) continue;
    list($note, $character) = explode('-', $word);
    if(note_cmp($note, $highest_note[0])>0) $highest_note = array($note, $character);
    if(note_cmp($note, $lowest_note[0])<0) $lowest_note = array($note, $character);
  }
  return array("highest"=>$highest_note, "lowest"=>$lowest_note);
}
function note_cmp($note_a, $note_b){
  $notes_order = array('c', 'd', 'e', 'f', 'g', 'a', 'b');
  $octave_a = intval(substr($note_a, -1));
  $octave_b = intval(substr($note_b, -1));
  $pure_note_a = strtolower(substr($note_a, 0, 1));
  $pure_note_b = strtolower(substr($note_b, 0, 1));
  return ($octave_a-$octave_b)*100 + (array_search($pure_note_a, $notes_order)-array_search($pure_note_b, $notes_order)) * 10 + strlen($note_a)-strlen($note_b);
}

?>

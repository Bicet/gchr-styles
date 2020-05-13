<style type="text/css">
.riga {
    display:flex;
    flex-wrap: wrap;
    border-spacing: 20px 10px; /*Optional*/

}

.tweet2 {
    flex: 1 274px;
    flex-grow: 1;
    flex-shrink: 1;
    flex-basis: 274px;
    padding: 20px;
    margin: 10px;
    border: 1px solid #e0dfdf;
    border-radius: 5px;
    -moz-border-radius: 5px;
}

#cf3 {
    position:relative;
    height: 420px;
    max-width: 500px;
    margin:0 auto;
    }
#cf3 img {
    position:absolute;
    left:0;
}

</style>

<div class="table_accordion_cell">
        <div class="accordion accordion_gc">
            <div class="icon_e_title_accordion">
                <p class="title_accordion">Facebook</p>

                <p class="number_universities">[nbsp]</p>

                <div class="piu_accordion">
                    <div class="verticale">
                        [nbsp]
                    </div>

                    <div class="orizzontale">
                        [nbsp]
                    </div>
                </div>
            </div>

            <div class="list_accordion">
            
                
                <!-- ROW #1 -->
                <div class="riga">
                    
                    <!-- POST #1 -->
                    <div class="tweet2">
                        <div class="video169_container"><iframe class="video169" src="https://player.vimeo.com/video/252703080?title=0&byline=0&portrait=0" frameborder="0" allowfullscreen=""></iframe></div>
                        <br>
                        <p id="fp1">Remembrance is a way to acknowledge past suffering and to prevent it from happening again. In the aftermath of gross and systematic violations of human rights, memorialisation can be a crucial tool in the process of reconciliation and justice.<br><br>Join renowned lecturers and experts discussing Memory Sites and Human Rights in the #GCHumanRights #MOOC: https://gchumanrights.org/mshr<br><br>@gchumanrights</p>
                        <br><br>
                        <a onclick="copyToClipboard('#fp1')" class="titolo_gc_europe" style="cursor: pointer;">Copy Caption</a> - <a href="https://drive.google.com/open?id=1KcWUTc8meBWVHqun7rINtcmBHTNRaV3Z" class="titolo_gc_europe" download target="_blank">Download Video</a>
                    </div><!-- CLOSE POST #1 -->
                    
                    <!-- POST #2 -->
                    <div class="tweet2">
                        <div class="video169_container"><iframe class="video169" src="https://player.vimeo.com/video/257472922?title=0&byline=0&portrait=0" frameborder="0" allowfullscreen=""></iframe></div>
                        <br>
                        <p id="fp2">“Acknowledging memory’s mobile, fluid character humanises memory; it humanises the use to which memory is put and it gives dignity and strength to memory.” <br><br>Hear more from Justice Albie Sachs about the benefits and challenges of memorialisation, truth and reconciliation processes and reparation in the #GCHumanRights #MOOC on Memory Sites and Human Rights: https://gchumanrights.org/mshr<br><br>@gchumanrights</p>
                        <br>
                        <a onclick="copyToClipboard('#fp2')" class="titolo_gc_europe" style="cursor: pointer;">Copy Caption</a> - <a href="https://drive.google.com/open?id=1wM64v2fpV2pbptI3vELcID_AFYWse1-P" class="titolo_gc_europe" download target="_blank">Download Video</a>
                    </div>
                    <!-- CLOSE POST #2 -->                  
                </div><!-- Close ROW #1 -->
                

                <!-- ROW #2 -->
                <div class="riga">

                    <!-- POST #3 -->
                    <div class="tweet2">
                        <div id="cf3"><a href="files/eiuc/moocs/mshr/fb/fb3.png" download target="_blank" width="100%"><img src="files/eiuc/moocs/mshr/fb/fb3-small.jpg" alt="" width="100%"></div>
                        <br>
                        <p id="fp3">Free enrolment in the #GCHumanrights #MOOC on Memory Sites and Human Rights is open!<br>Learn about the links between history, memory, art and human rights.<br>Study conceptual frameworks, examples of memorials in diverse political and cultural contexts, their influence in shaping communities and identities.<br>Discover the impact of artistic language and design on memorialisation, democratisation and justice.<br><br>https://gchumanrights.org/mshr<br><br>@gchumanrights</p>
                        <br>
                        <a onclick="copyToClipboard('#fp3')" class="titolo_gc_europe" style="cursor: pointer;">Copy Caption</a> - <a href="files/eiuc/moocs/mshr/fb/fb3.png" class="titolo_gc_europe" download target="_blank">Download Pic</a>
                    </div><!-- CLOSE POST #3 -->

                    <!-- POST #4 -->
                    <div class="tweet2">
                       <div id="cf3"><a href="files/eiuc/moocs/mshr/fb/fb2.png" download target="_blank" width="100%"><img src="files/eiuc/moocs/mshr/fb/fb2-small.jpg" alt="" width="100%"></div>
                       <br>
                        <p id="fp4">How do we remember past atrocities and human rights violations? Why and what is important to remember? How are memories shaped and who is involved in ‘building memory’?<br>Enrol in the #GCHumanRights #MOOC on Memory Sites and Human Rights to find out!<br><br>https://gchumanrights.org/mshr<br><br>@gchumanrights</p>
                        <br><br><br><br>
                        <a onclick="copyToClipboard('#fp4')" class="titolo_gc_europe" style="cursor: pointer;">Copy Caption</a> - <a href="files/eiuc/moocs/mshr/fb/fb2.png" class="titolo_gc_europe" download target="_blank">Download Pic</a>

                    </div><!-- CLOSE POST #4 -->

                </div><!-- CLOSE ROW #2 -->
            </div>
        </div>
</div>

<script>
function copyToClipboard(element) {
  var $temp = $("<textarea>");
  $("body").append($temp);
  var html = $(element).html();
  html = html.replace(/<br>/g, "\n"); // or \r\n
  html = html.replace(/&amp;/, "&");

  $temp.val(html).select();
  document.execCommand("copy");
  $temp.remove();
}
    
/* USELESS CODE AS #error-details is not defined but could be used in futture
    $( "#FailCopy" ).click(function() {
      alert("Well done! div #error-details has been copy to your clipboard, now paste it in the notepad or email!");
    }
    );
*/

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

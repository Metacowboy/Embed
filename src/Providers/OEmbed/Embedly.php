<?php
namespace Embed\Providers\OEmbed;

use Embed\Url;

class Embedly extends OEmbedImplementation
{
    /**
     * {@inheritdoc}
     */
    public static function getEndPoint()
    {
        return 'http://api.embed.ly/1/oembed';
    }

    /**
     * {@inheritdoc}
     */
    public static function getPatterns()
    {
        return [
            'http://*yfrog.*/*',
            'http://twitter.com/*/status/*/photo/*',
            'http://twitter.com/*/statuses/*/photo',
            'http://pic.twitter.com/*',
            'http://www.twitter.com/*/statuses/*/photo/*',
            'http://mobile.twitter.com/*/status/*/photo/*',
            'http://mobile.twitter.com/*/statuses/*/photo/*',
            'https://twitter.com/*/status/*/photo/*',
            'https://twitter.com/*/statuses/*/photo/*',
            'https://www.twitter.com/*/status/*/photo/*',
            'https://www.twitter.com/*/statuses/*/photo/*',
            'https://mobile.twitter.com/*/status/*/photo/*',
            'https://mobile.twitter.com/*/statuses/*/photo/*',
            'http://www.flickr.com/photos/*',
            'http://flic.kr/*',
            'http://twitpic.com/*',
            'http://www.twitpic.com/*',
            'http://twitpic.com/photos/*',
            'http://www.twitpic.com/photos/*',
            'http://*imgur.com/*',
            'http://*.posterous.com/*',
            'http://post.ly/*',
            'http://twitgoo.com/*',
            'http://i*.photobucket.com/albums/*',
            'http://s*.photobucket.com/albums/*',
            'http://media.photobucket.com/image/*',
            'http://phodroid.com/*/*/*',
            'http://www.mobypicture.com/user/*/view/*',
            'http://moby.to/*',
            'http://xkcd.com/*',
            'http://www.xkcd.com/*',
            'http://imgs.xkcd.com/*',
            'http://www.asofterworld.com/index.php?id=*',
            'http://www.asofterworld.com/*.jpg',
            'http://asofterworld.com/*.jpg',
            'http://www.qwantz.com/index.php?comic=*',
            'http://23hq.com/*/photo/*',
            'http://www.23hq.com/*/photo/*',
            'http://*dribbble.com/shots/*',
            'http://drbl.in/*',
            'http://*.smugmug.com/*',
            'http://*.smugmug.com/*#*',
            'http://emberapp.com/*/images/*',
            'http://emberapp.com/*/images/*/sizes/*',
            'http://emberapp.com/*/collections/*/*',
            'http://emberapp.com/*/categories/*/*/*',
            'http://embr.it/*',
            'http://picasaweb.google.com*/*/*#*',
            'http://picasaweb.google.com*/lh/photo/*',
            'http://picasaweb.google.com*/*/*',
            'http://dailybooth.com/*/*',
            'http://brizzly.com/pic/*',
            'http://pics.brizzly.com/*.jpg',
            'http://img.ly/*',
            'http://www.tinypic.com/view.php*',
            'http://tinypic.com/view.php*',
            'http://www.tinypic.com/player.php*',
            'http://tinypic.com/player.php*',
            'http://www.tinypic.com/r/*/*',
            'http://tinypic.com/r/*/*',
            'http://*.tinypic.com/*.jpg',
            'http://*.tinypic.com/*.png',
            'http://meadd.com/*/*',
            'http://meadd.com/*',
            'http://*.deviantart.com/art/*',
            'http://*.deviantart.com/gallery/*',
            'http://*.deviantart.com/#/*',
            'http://fav.me/*',
            'http://*.deviantart.com',
            'http://*.deviantart.com/gallery',
            'http://*.deviantart.com/*/*.jpg',
            'http://*.deviantart.com/*/*.gif',
            'http://*.deviantart.net/*/*.jpg',
            'http://*.deviantart.net/*/*.gif',
            'http://www.fotopedia.com/*/*',
            'http://fotopedia.com/*/*',
            'http://photozou.jp/photo/show/*/*',
            'http://photozou.jp/photo/photo_only/*/*',
            'http://instagr.am/p/*',
            'http://instagram.com/p/*',
            'http://skitch.com/*/*/*',
            'http://img.skitch.com/*',
            'https://skitch.com/*/*/*',
            'https://img.skitch.com/*',
            'http://share.ovi.com/media/*/*',
            'http://www.questionablecontent.net/',
            'http://questionablecontent.net/',
            'http://www.questionablecontent.net/view.php*',
            'http://questionablecontent.net/view.php*',
            'http://questionablecontent.net/comics/*.png',
            'http://www.questionablecontent.net/comics/*.png',
            'http://twitrpix.com/*',
            'http://*.twitrpix.com/*',
            'http://www.someecards.com/*/*',
            'http://someecards.com/*/*',
            'http://some.ly/*',
            'http://www.some.ly/*',
            'http://pikchur.com/*',
            'http://achewood.com/*',
            'http://www.achewood.com/*',
            'http://achewood.com/index.php*',
            'http://www.achewood.com/index.php*',
            'http://www.whosay.com/*/content/*',
            'http://www.whosay.com/*/photos/*',
            'http://www.whosay.com/*/videos/*',
            'http://say.ly/*',
            'http://ow.ly/i/*',
            'http://color.com/s/*',
            'http://bnter.com/convo/*',
            'http://mlkshk.com/p/*',
            'http://lockerz.com/s/*',
            'http://pics.lockerz.com/s/*',
            'http://lightbox.com/*',
            'http://www.lightbox.com/*',
            'http://pinterest.com/pin/*',
            'http://d.pr/i/*',
            'http://www.eyeem.com/p/*',
            'http://www.eyeem.com/a/*',
            'http://www.eyeem.com/u/*',
            'http://gist.github.com/*',
            'https://gist.github.com/*',
            'http://twitter.com/*/status/*',
            'http://twitter.com/*/statuses/*',
            'http://www.twitter.com/*/status/*',
            'http://www.twitter.com/*/statuses/*',
            'http://mobile.twitter.com/*/status/*',
            'http://mobile.twitter.com/*/statuses/*',
            'https://twitter.com/*/status/*',
            'https://twitter.com/*/statuses/*',
            'https://www.twitter.com/*/status/*',
            'https://www.twitter.com/*/statuses/*',
            'https://mobile.twitter.com/*/status/*',
            'https://mobile.twitter.com/*/statuses/*',
            'http://www.crunchbase.com/*/*',
            'http://crunchbase.com/*/*',
            'http://www.slideshare.net/*/*',
            'http://www.slideshare.net/mobile/*/*',
            'http://slidesha.re/*',
            'http://scribd.com/doc/*',
            'http://www.scribd.com/doc/*',
            'http://scribd.com/mobile/documents/*',
            'http://www.scribd.com/mobile/documents/*',
            'http://screenr.com/*',
            'http://polldaddy.com/community/poll/*',
            'http://polldaddy.com/poll/*',
            'http://answers.polldaddy.com/poll/*',
            'http://www.5min.com/Video/*',
            'http://www.howcast.com/videos/*',
            'http://www.screencast.com/*/media/*',
            'http://screencast.com/*/media/*',
            'http://www.screencast.com/t/*',
            'http://screencast.com/t/*',
            'http://issuu.com/*/docs/*',
            'http://www.kickstarter.com/projects/*/*',
            'http://www.scrapblog.com/viewer/viewer.aspx*',
            'http://foursquare.com/*',
            'http://www.foursquare.com/*',
            'https://foursquare.com/*',
            'https://www.foursquare.com/*',
            'http://4sq.com/*',
            'http://linkedin.com/in/*',
            'http://linkedin.com/pub/*',
            'http://*.linkedin.com/in/*',
            'http://*.linkedin.com/pub/*',
            'http://www.sliderocket.com/*',
            'http://sliderocket.com/*',
            'http://app.sliderocket.com/*',
            'http://portal.sliderocket.com/*',
            'http://beta-sliderocket.com/*',
            'http://ping.fm/p/*',
            'http://chart.ly/symbols/*',
            'http://chart.ly/*',
            'http://maps.google.com/maps?*',
            'http://maps.google.com/?*',
            'http://maps.google.com/maps/ms?*',
            'http://*.craigslist.org/*/*',
            'http://my.opera.com/*/albums/show.dml?id=*',
            'http://my.opera.com/*/albums/showpic.dml?album=*&picture=*',
            'http://tumblr.com/*',
            'http://*.tumblr.com/post/*',
            'http://www.polleverywhere.com/polls/*',
            'http://www.polleverywhere.com/multiple_choice_polls/*',
            'http://www.polleverywhere.com/free_text_polls/*',
            'http://www.quantcast.com/wd:*',
            'http://www.quantcast.com/*',
            'http://siteanalytics.compete.com/*',
            'http://statsheet.com/statplot/charts/*/*/*/*',
            'http://statsheet.com/statplot/charts/e/*',
            'http://statsheet.com/*/teams/*/*',
            'http://statsheet.com/tools/chartlets?chart=*',
            'http://*.status.net/notice/*',
            'http://identi.ca/notice/*',
            'http://brainbird.net/notice/*',
            'http://www.studivz.net/Profile/*',
            'http://www.studivz.net/l/*',
            'http://www.studivz.net/Groups/Overview/*',
            'http://www.studivz.net/Gadgets/Info/*',
            'http://www.studivz.net/Gadgets/Install/*',
            'http://www.studivz.net/*',
            'http://www.meinvz.net/Profile/*',
            'http://www.meinvz.net/l/*',
            'http://www.meinvz.net/Groups/Overview/*',
            'http://www.meinvz.net/Gadgets/Info/*',
            'http://www.meinvz.net/Gadgets/Install/*',
            'http://www.meinvz.net/*',
            'http://www.schuelervz.net/Profile/*',
            'http://www.schuelervz.net/l/*',
            'http://www.schuelervz.net/Groups/Overview/*',
            'http://www.schuelervz.net/Gadgets/Info/*',
            'http://www.schuelervz.net/Gadgets/Install/*',
            'http://www.schuelervz.net/*',
            'http://myloc.me/*',
            'http://pastebin.com/*',
            'http://pastie.org/*',
            'http://www.pastie.org/*',
            'http://redux.com/stream/item/*/*',
            'http://redux.com/f/*/*',
            'http://www.redux.com/stream/item/*/*',
            'http://www.redux.com/f/*/*',
            'http://cl.ly/*',
            'http://cl.ly/*/content',
            'http://speakerdeck.com/u/*/p/*',
            'http://www.kiva.org/lend/*',
            'http://www.timetoast.com/timelines/*',
            'http://storify.com/*/*',
            'http://*meetup.com/*',
            'http://meetu.ps/*',
            'http://www.dailymile.com/people/*/entries/*',
            'http://*.kinomap.com/*',
            'http://www.metacdn.com/r/c/*/*',
            'http://www.metacdn.com/r/m/*/*',
            'http://prezi.com/*/*',
            'http://*.uservoice.com/*/suggestions/*',
            'http://formspring.me/*',
            'http://www.formspring.me/*',
            'http://formspring.me/*/q/*',
            'http://www.formspring.me/*/q/*',
            'http://twitlonger.com/show/*',
            'http://www.twitlonger.com/show/*',
            'http://tl.gd/*',
            'http://www.qwiki.com/q/*',
            'http://crocodoc.com/*',
            'http://*.crocodoc.com/*',
            'https://crocodoc.com/*',
            'https://*.crocodoc.com/*',
            'http://www.wikipedia.org/wiki/*',
            'http://*.wikipedia.org/wiki/*',
            'http://www.wikimedia.org/wiki/File*',
            'https://urtak.com/u/*',
            'https://urtak.com/clr/*',
            'http://graphicly.com/*/*/*',
            'https://ganxy.com/*',
            'https://www.ganxy.com/*',
            'http://gopollgo.com/*',
            'http://www.gopollgo.com/*',
            'http://360.io/*',
            'http://www.behance.net/gallery/*',
            'http://behance.net/gallery/*',
            'http://*amazon.*/gp/product/*',
            'http://*amazon.*/*/dp/*',
            'http://*amazon.*/dp/*',
            'http://*amazon.*/o/ASIN/*',
            'http://*amazon.*/gp/offer-listing/*',
            'http://*amazon.*/*/ASIN/*',
            'http://*amazon.*/gp/product/images/*',
            'http://*amazon.*/gp/aw/d/*',
            'http://www.amzn.com/*',
            'http://amzn.com/*',
            'http://www.shopstyle.com/browse*',
            'http://www.shopstyle.com/action/apiVisitRetailer*',
            'http://api.shopstyle.com/action/apiVisitRetailer*',
            'http://www.shopstyle.com/action/viewLook*',
            'http://itunes.apple.com/*',
            'https://itunes.apple.com/*',
            'http://*youtube.com/watch*',
            'http://*.youtube.com/v/*',
            'https://*youtube.com/watch*',
            'https://*.youtube.com/v/*',
            'http://youtu.be/*',
            'http://*.youtube.com/user/*',
            'http://*.youtube.com/*#*/*',
            'http://m.youtube.com/watch*',
            'http://m.youtube.com/index*',
            'http://*.youtube.com/profile*',
            'http://*.youtube.com/view_play_list*',
            'http://*.youtube.com/playlist*',
            'http://*twitch.tv/*',
            'http://*justin.tv/*/b/*',
            'http://*justin.tv/*/w/*',
            'http://*twitch.tv/*',
            'http://*twitch.tv/*/b/*',
            'http://www.ustream.tv/recorded/*',
            'http://www.ustream.tv/channel/*',
            'http://www.ustream.tv/*',
            'http://qik.com/video/*',
            'http://qik.com/*',
            'http://qik.ly/*',
            'http://*revision3.com/*',
            'http://*.dailymotion.com/video/*',
            'http://*.dailymotion.com/*/video/*',
            'http://collegehumor.com/video:*',
            'http://collegehumor.com/video/*',
            'http://www.collegehumor.com/video:*',
            'http://www.collegehumor.com/video/*',
            'http://*twitvid.com/*',
            'http://telly.com/*',
            'http://www.telly.com/*',
            'http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid*',
            'http://www.myspace.com/index.cfm?fuseaction=*&videoid*',
            'http://www.metacafe.com/watch/*',
            'http://www.metacafe.com/w/*',
            'http://blip.tv/*/*',
            'http://*.blip.tv/*/*',
            'http://video.google.com/videoplay?*',
            'http://*revver.com/video/*',
            'http://video.yahoo.com/watch/*/*',
            'http://video.yahoo.com/network/*',
            'http://sports.yahoo.com/video/*',
            'http://*viddler.com/v/*',
            'http://liveleak.com/view?*',
            'http://www.liveleak.com/view?*',
            'http://animoto.com/play/*',
            'http://dotsub.com/view/*',
            'http://www.overstream.net/view.php?oid=*',
            'http://www.livestream.com/*',
            'http://www.worldstarhiphop.com/videos/video*.php?v=*',
            'http://worldstarhiphop.com/videos/video*.php?v=*',
            'http://teachertube.com/viewVideo.php*',
            'http://www.teachertube.com/viewVideo.php*',
            'http://www1.teachertube.com/viewVideo.php*',
            'http://www2.teachertube.com/viewVideo.php*',
            'http://bambuser.com/v/*',
            'http://bambuser.com/channel/*',
            'http://bambuser.com/channel/*/broadcast/*',
            'http://www.schooltube.com/video/*/*',
            'http://bigthink.com/ideas/*',
            'http://bigthink.com/series/*',
            'http://sendables.jibjab.com/view/*',
            'http://sendables.jibjab.com/originals/*',
            'http://jibjab.com/view/*',
            'http://www.xtranormal.com/watch/*',
            'http://socialcam.com/v/*',
            'http://www.socialcam.com/v/*',
            'http://dipdive.com/media/*',
            'http://dipdive.com/member/*/media/*',
            'http://dipdive.com/v/*',
            'http://*.dipdive.com/media/*',
            'http://*.dipdive.com/v/*',
            'http://v.youku.com/v_show/*.html',
            'http://v.youku.com/v_playlist/*.html',
            'http://www.snotr.com/video/*',
            'http://snotr.com/video/*',
            'http://video.jardenberg.se/*',
            'http://www.clipfish.de/*/*/video/*',
            'http://www.myvideo.de/watch/*',
            'http://www.viewrz.com/event/*/* ',
            'http://www.viewrz.com/*/event/*/* ',
            'http://www.vzaar.com/videos/* ',
            'http://vzaar.com/videos/*',
            'http://www.vzaar.tv/*',
            'http://vzaar.tv/*',
            'http://vzaar.me/*',
            'http://*.vzaar.me/*',
            'http://coub.com/view/* ',
            'http://coub.com/embed/*',
            'http://www.whitehouse.gov/photos-and-video/video/*',
            'http://www.whitehouse.gov/video/*',
            'http://wh.gov/photos-and-video/video/*',
            'http://wh.gov/video/*',
            'http://www.hulu.com/watch*',
            'http://www.hulu.com/w/*',
            'http://www.hulu.com/embed/*',
            'http://hulu.com/watch*',
            'http://hulu.com/w/*',
            'http://*crackle.com/c/*',
            'http://www.fancast.com/*/videos',
            'http://www.funnyordie.com/videos/*',
            'http://www.funnyordie.com/m/*',
            'http://funnyordie.com/videos/*',
            'http://funnyordie.com/m/*',
            'http://www.vimeo.com/groups/*/videos/*',
            'http://www.vimeo.com/*',
            'https://www.vimeo.com/*',
            'http://vimeo.com/groups/*/videos/*',
            'http://vimeo.com/*',
            'https://vimeo.com/*',
            'http://vimeo.com/m/#/*',
            'http://www.ted.com/talks/*.html*',
            'http://www.ted.com/talks/lang/*/*.html*',
            'http://www.ted.com/index.php/talks/*.html*',
            'http://www.ted.com/index.php/talks/lang/*/*.html*',
            'http://*nfb.ca/film/*',
            'http://www.thedailyshow.com/watch/*',
            'http://www.thedailyshow.com/full-episodes/*',
            'http://www.thedailyshow.com/collection/*/*/*',
            'http://movies.yahoo.com/movie/*/video/*',
            'http://movies.yahoo.com/movie/*/trailer',
            'http://movies.yahoo.com/movie/*/video',
            'http://www.colbertnation.com/the-colbert-report-collections/*',
            'http://www.colbertnation.com/full-episodes/*',
            'http://www.colbertnation.com/the-colbert-report-videos/*',
            'http://www.comedycentral.com/videos/index.jhtml?*',
            'http://www.theonion.com/video/*',
            'http://theonion.com/video/*',
            'http://wordpress.tv/*/*/*/*/',
            'http://www.traileraddict.com/trailer/*',
            'http://www.traileraddict.com/clip/*',
            'http://www.traileraddict.com/poster/*',
            'http://www.escapistmagazine.com/videos/*',
            'http://www.trailerspy.com/trailer/*/*',
            'http://www.trailerspy.com/trailer/*',
            'http://www.trailerspy.com/view_video.php*',
            'http://www.atom.com/*/*/',
            'http://fora.tv/*/*/*/*',
            'http://www.spike.com/video/*',
            'http://www.gametrailers.com/video*',
            'http://gametrailers.com/video*',
            'http://www.koldcast.tv/video/*',
            'http://www.koldcast.tv/#video:*',
            'http://mixergy.com/*',
            'http://video.pbs.org/video/*',
            'http://www.zapiks.com/*',
            'http://tv.digg.com/diggnation/*',
            'http://tv.digg.com/diggreel/*',
            'http://tv.digg.com/diggdialogg/*',
            'http://www.trutv.com/video/*',
            'http://www.nzonscreen.com/title/*',
            'http://nzonscreen.com/title/*',
            'http://app.wistia.com/embed/medias/*',
            'https://app.wistia.com/embed/medias/*',
            'http://wistia.com/*',
            'https://wistia.com/*',
            'http://*.wistia.com/*',
            'https://*.wistia.com/*',
            'http://*.wi.st/*',
            'http://wi.st/*',
            'https://*.wi.st/*',
            'https://wi.st/*',
            'http://hungrynation.tv/*/episode/*',
            'http://www.hungrynation.tv/*/episode/*',
            'http://hungrynation.tv/episode/*',
            'http://www.hungrynation.tv/episode/*',
            'http://indymogul.com/*/episode/*',
            'http://www.indymogul.com/*/episode/*',
            'http://indymogul.com/episode/*',
            'http://www.indymogul.com/episode/*',
            'http://channelfrederator.com/*/episode/*',
            'http://www.channelfrederator.com/*/episode/*',
            'http://channelfrederator.com/episode/*',
            'http://www.channelfrederator.com/episode/*',
            'http://tmiweekly.com/*/episode/*',
            'http://www.tmiweekly.com/*/episode/*',
            'http://tmiweekly.com/episode/*',
            'http://www.tmiweekly.com/episode/*',
            'http://99dollarmusicvideos.com/*/episode/*',
            'http://www.99dollarmusicvideos.com/*/episode/*',
            'http://99dollarmusicvideos.com/episode/*',
            'http://www.99dollarmusicvideos.com/episode/*',
            'http://ultrakawaii.com/*/episode/*',
            'http://www.ultrakawaii.com/*/episode/*',
            'http://ultrakawaii.com/episode/*',
            'http://www.ultrakawaii.com/episode/*',
            'http://barelypolitical.com/*/episode/*',
            'http://www.barelypolitical.com/*/episode/*',
            'http://barelypolitical.com/episode/*',
            'http://www.barelypolitical.com/episode/*',
            'http://barelydigital.com/*/episode/*',
            'http://www.barelydigital.com/*/episode/*',
            'http://barelydigital.com/episode/*',
            'http://www.barelydigital.com/episode/*',
            'http://threadbanger.com/*/episode/*',
            'http://www.threadbanger.com/*/episode/*',
            'http://threadbanger.com/episode/*',
            'http://www.threadbanger.com/episode/*',
            'http://vodcars.com/*/episode/*',
            'http://www.vodcars.com/*/episode/*',
            'http://vodcars.com/episode/*',
            'http://www.vodcars.com/episode/*',
            'http://confreaks.net/videos/*',
            'http://www.confreaks.net/videos/*',
            'http://confreaks.com/videos/*',
            'http://www.confreaks.com/videos/*',
            'http://video.allthingsd.com/video/*',
            'http://videos.nymag.com/*',
            'http://aniboom.com/animation-video/*',
            'http://www.aniboom.com/animation-video/*',
            'http://clipshack.com/Clip.aspx?*',
            'http://www.clipshack.com/Clip.aspx?*',
            'http://grindtv.com/*/video/*',
            'http://www.grindtv.com/*/video/*',
            'http://ifood.tv/recipe/*',
            'http://ifood.tv/video/*',
            'http://ifood.tv/channel/user/*',
            'http://www.ifood.tv/recipe/*',
            'http://www.ifood.tv/video/*',
            'http://www.ifood.tv/channel/user/*',
            'http://logotv.com/video/*',
            'http://www.logotv.com/video/*',
            'http://lonelyplanet.com/Clip.aspx?*',
            'http://www.lonelyplanet.com/Clip.aspx?*',
            'http://streetfire.net/video/*.htm*',
            'http://www.streetfire.net/video/*.htm*',
            'http://trooptube.tv/videos/*',
            'http://www.trooptube.tv/videos/*',
            'http://sciencestage.com/v/*.html',
            'http://sciencestage.com/a/*.html',
            'http://www.sciencestage.com/v/*.html',
            'http://www.sciencestage.com/a/*.html',
            'http://link.brightcove.com/services/player/bcpid*',
            'http://wirewax.com/*',
            'http://www.wirewax.com/*',
            'http://canalplus.fr/*',
            'http://www.canalplus.fr/*',
            'http://www.vevo.com/watch/*',
            'http://www.vevo.com/video/*',
            'http://pixorial.com/watch/*',
            'http://www.pixorial.com/watch/*',
            'http://spreecast.com/events/*',
            'http://www.spreecast.com/events/*',
            'http://showme.com/sh/*',
            'http://www.showme.com/sh/*',
            'http://*.looplogic.com/*',
            'https://*.looplogic.com/*',
            'http://on.aol.com/video/*',
            'http://on.aol.com/playlist/*',
            'http://videodetective.com/*/*',
            'http://www.videodetective.com/*/*',
            'http://khanacademy.org/*',
            'http://www.khanacademy.org/*',
            'http://www.godtube.com/featured/video/*',
            'http://godtube.com/featured/video/*',
            'http://www.godtube.com/watch/*',
            'http://godtube.com/watch/*',
            'http://www.tangle.com/view_video*',
            'http://mediamatters.org/mmtv/*',
            'http://www.clikthrough.com/theater/video/*',
            'http://www.clipsyndicate.com/video/playlist/*/*',
            'http://espn.go.com/video/clip*',
            'http://espn.go.com/*/story*',
            'http://abcnews.com/*/video/*',
            'http://abcnews.com/video/playerIndex*',
            'http://abcnews.go.com/*/video/*',
            'http://abcnews.go.com/video/playerIndex*',
            'http://washingtonpost.com/wp-dyn/*/video/*/*/*/*',
            'http://www.washingtonpost.com/wp-dyn/*/video/*/*/*/*',
            'http://www.boston.com/video*',
            'http://boston.com/video*',
            'http://www.boston.com/*video*',
            'http://boston.com/*video*',
            'http://www.facebook.com/photo.php*',
            'http://www.facebook.com/video/video.php*',
            'http://www.facebook.com/v/*',
            'https://www.facebook.com/photo.php*',
            'https://www.facebook.com/video/video.php*',
            'https://www.facebook.com/v/*',
            'http://cnbc.com/id/*?*video*',
            'http://www.cnbc.com/id/*?*video*',
            'http://cnbc.com/id/*/play/1/video/*',
            'http://www.cnbc.com/id/*/play/1/video/*',
            'http://cbsnews.com/video/watch/*',
            'http://plus.google.com/*',
            'http://www.google.com/profiles/*',
            'https://plus.google.com/*',
            'http://google.com/profiles/*',
            'http://www.cnn.com/video/*',
            'http://edition.cnn.com/video/*',
            'http://money.cnn.com/video/*',
            'http://today.msnbc.msn.com/id/*/vp/*',
            'http://www.msnbc.msn.com/id/*/vp/*',
            'http://www.msnbc.msn.com/id/*/ns/*',
            'http://today.msnbc.msn.com/id/*/ns/*',
            'http://www.globalpost.com/video/*',
            'http://www.globalpost.com/dispatch/*',
            'http://guardian.co.uk/*/video/*/*/*/*',
            'http://www.guardian.co.uk/*/video/*/*/*/*',
            'http://bravotv.com/*/*/videos/*',
            'http://www.bravotv.com/*/*/videos/*',
            'http://video.nationalgeographic.com/video/*/*/*/*',
            'http://dsc.discovery.com/videos/*',
            'http://animal.discovery.com/videos/*',
            'http://health.discovery.com/videos/*',
            'http://investigation.discovery.com/videos/*',
            'http://military.discovery.com/videos/*',
            'http://planetgreen.discovery.com/videos/*',
            'http://science.discovery.com/videos/*',
            'http://tlc.discovery.com/videos/*',
            'http://video.forbes.com/fvn/*',
            'http://distrify.com/film/*',
            'http://muvi.es/*',
            'http://soundcloud.com/*',
            'http://soundcloud.com/*/*',
            'http://soundcloud.com/*/sets/*',
            'http://soundcloud.com/groups/*',
            'http://snd.sc/*',
            'http://open.spotify.com/*',
            'http://www.last.fm/music/*',
            'http://www.last.fm/music/+videos/*',
            'http://www.last.fm/music/+images/*',
            'http://www.last.fm/music/*/_/*',
            'http://www.last.fm/music/*/*',
            'http://www.mixcloud.com/*/*/',
            'http://www.radionomy.com/*/radio/*',
            'http://radionomy.com/*/radio/*',
            'http://www.hark.com/clips/*',
            'http://www.rdio.com/#/artist/*/album/*',
            'http://www.rdio.com/artist/*/album/*',
            'http://www.zero-inch.com/*',
            'http://*.bandcamp.com/',
            'http://*.bandcamp.com/track/*',
            'http://*.bandcamp.com/album/*',
            'http://freemusicarchive.org/music/*',
            'http://www.freemusicarchive.org/music/*',
            'http://freemusicarchive.org/curator/*',
            'http://www.freemusicarchive.org/curator/*',
            'http://www.npr.org/*/*/*/*/*',
            'http://www.npr.org/*/*/*/*/*/*',
            'http://www.npr.org/*/*/*/*/*/*/*',
            'http://www.npr.org/templates/story/story.php*',
            'http://huffduffer.com/*/*',
            'http://www.audioboo.fm/boos/*',
            'http://audioboo.fm/boos/*',
            'http://boo.fm/b*',
            'http://www.xiami.com/song/*',
            'http://xiami.com/song/*',
            'http://www.saynow.com/playMsg.html*',
            'http://www.saynow.com/playMsg.html*',
            'http://grooveshark.com/*',
            'http://radioreddit.com/songs*',
            'http://www.radioreddit.com/songs*',
            'http://radioreddit.com/?q=songs*',
            'http://www.radioreddit.com/?q=songs*',
            'http://www.gogoyoko.com/song/*',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function getParams(Url $url)
    {
        return [
            'url' => $url->getUrl(),
            'format' => 'json'
        ];
    }
}

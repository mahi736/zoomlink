var noclass;
var mfn = 'https://us04web.zoom.us/j/3056994432?pwd=UW1XL2ZXblBsTUwwcFZSbHBPYkpKUT09';
var azr = 'https://us04web.zoom.us/j/7338011033?pwd=RU9KMVFlTjhnUXNkUnh5T2RvRVIyQT09';
var aal = 'https://us04web.zoom.us/j/9855801606?pwd=VTZnakxSY2xVRXgyZzQ3N2lwSkgyZz09';
var sms = 'https://us04web.zoom.us/j/4351375530?pwd=K2VLdVcrLzI5QmdqN1JDb2JESno0QT09';
var mmu = 'https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09';
var mjh = 'https://us04web.zoom.us/j/9018486694?pwd=eld4VGxBdTlhemVTZlFKK2NDcXpPZz09';
var zf = 'https://us04web.zoom.us/j/6022353957?pwd=V2NlbHdRcDVWRDVrY2FpSGQvRkZnUT09';
var mar = 'https://us04web.zoom.us/j/6830754268?pwd=RFVJTWtVZjliOEdqblo5WUxuNEx4QT09';
var sps = 'https://us04web.zoom.us/j/4451007357?pwd=QU82TzNPMnFOUFdCODZWWnl5NFIwdz09';
var mli = 'https://us04web.zoom.us/j/3159338639?pwd=d1QvNjZTK0M0MkxtbktVK29yRjRuUT09';
var sba = 'https://us04web.zoom.us/j/2627129367?pwd=YjhmOUxjSno5WEszdlBsTnI4VHJQQT09';
var msh = 'https://us04web.zoom.us/j/6543827888?pwd=Ym5rbCtHeCtoekdBOEwwcXdoc3dLQT09';
var sdi = 'https://us04web.zoom.us/j/2368232378?pwd=bEFvdVlHMWVNdjlINEZ2NklhNW81QT09';
var anh = 'https://us04web.zoom.us/j/9733291074?pwd=REhEaitKcW9obE51amJmb2d2TXBuZz09';
var ms = 'https://us04web.zoom.us/j/7297530540?pwd=QUFUMTNvb0tiS3VGOGNOck1mMVl5dz09';
var mna = 'https://us04web.zoom.us/j/9894493425?pwd=cmhRaHAxYmFONDQ4ZzE5d21vZGpPUT09';
var nnd = 'https://us04web.zoom.us/j/2163696888?pwd=c21zSWhWdCtSait5V0lheW5WWUhkQT09';
var mlis = 'https://us04web.zoom.us/j/3159338639?pwd=V2xCNXBEZW1hNUdFb3NzUWpQL2wzdz09';
var rk = 'https://us05web.zoom.us/j/5152750300?pwd=RDRSWGxqT0pIUWNPcXIyTU1pSFJZUT09';
var inl = 'https://us04web.zoom.us/j/9112900414?pwd=YU80RXd1V0JwVVFkK0JOZWVMSDJUQT09';
var ask = 'https://us04web.zoom.us/j/6792230198?pwd=cDVZcXRNWGVsMEh2Mll1Vms1Z1ZOdz09';
var si = 'https://us04web.zoom.us/j/3403681177?pwd=YWJEYXBjeWM5TndaRitLZDlTNW1XQT09';

var time;

let clock = document.getElementById("clock")
let datebl = document.getElementById("datebl")

  var routine = 
[ [rk , inl , mar , ask],
  [rk , inl , mmu , mjh],
  [rk, inl , si , sba],
  [rk , inl , msh , ms],
  [rk , inl , sps , mli],
  [noclass , noclass , noclass , noclass],
  [rk , inl , mfn , sdi]];
  
  var tech = 
[ ['rk' , 'inl' , 'mar' , 'ask'],
  ['rk' , 'inl' , 'mmu' , 'mjh' ],
  ['rk' , 'inl' , 'si' , 'sba'],
  ['rk' , 'inl' , 'msh' , 'ms'],
  ['rk' , 'inl' , 'sps' , 'mli'],
  ['noclass' , 'noclass' , 'noclass' , 'noclass'],
  ['rk' , 'inl' , 'mfn' , 'sdi']];

  var subject = 
[ ['ICT exam (rk sir)' , 'Higher Math exam (inl miss)' , 'BIO (MAR miss)' , 'BGS (ASK miss)'],
  ['B-2 exam (rk sir)' , 'Chem exam (inl miss)' , 'HM (MMU sir)' , 'REL (MJH sir)' ],
  ['E-2 exam (rk sir)' , 'Bio exam (inl miss)' , 'ICT (SI sir)' , 'B-2 (SBA sir)'],
  ['GM exam (rk sir)' , 'BGS exam (inl miss)' , 'PHY (MSH sir)' , 'B-1 (MS miss)'],
  ['B-1 exam (rk Sir)' , 'E1 exam (inl miss)' , 'E-1 (SPS sir)' , 'CHE (MLI miss)'],
  ['noclass' , 'noclass' , 'noclass' , 'noclass'],
  ['REL Exam (rk sir)' , 'Physics exam (inl miss)' , 'GM (MFN sir)' , 'E-2 (SDI Sir)']];
  let d = new Date();
  
  var weekday = new Array(7);
  weekday[0] = "Sunday";
  weekday[1] = "Monday";
  weekday[2] = "Tuesday";
  weekday[3] = "Wednesday";
  weekday[4] = "Thursday";
  weekday[5] = "Friday";
  weekday[6] = "Saturday";

  var n = weekday[d.getDay()];
//   var day = createP(n).id("day");

  
  setInterval(() => {
    d = new Date();
    let hr = d.getHours();
    let mn = d.getMinutes();
    let sc = d.getSeconds();
    mn = (mn < 10 ? "0" : "") + mn; 
    sc = (sc < 10 ? "0" : "") + sc;  
    hr = (hr < 10 ? "0" : "") + hr;  

    let timeOfDay = (hr < 12) ? "AM" : "PM";
    // covert railway clock to AM/PM clock
    hr = (hr > 12) ? hr - 12 : hr;
    hr = (hr == 00) ? 12 : hr;
    
    time = hr + ':' + mn + ':' + sc + ' ' + timeOfDay;
    clock.innerHTML = time;
    datebl.innerHTML = n;
}, 1000);



  
setInterval(() => {
    passbl.style.display = 'block';
    button.style.display = 'inline-block';

    var i = new Date();
    
    var today = routine[i.getDay()];
    var tt = tech[i.getDay()];
    var subj = subject[i.getDay()];
    hr = i.getHours();
    mn = i.getMinutes();
    
    var dt = hr * 100 + mn;
    let st;
    let ttp;
    let subt;
    
    if(dt >= 0945 && dt < 1049){
      subt = subj[0];
      st = today[0];
      ttp = tt[0];
    }
      else if (dt >= 1050 && dt < 1139){
      subt = subj[1];  
      st = today[1];
      ttp = tt[1];
    }
    else if (dt >= 1140 && dt < 1229){
      subt = subj[2];  
      st = today[2];
      ttp = tt[2];
    }
    else if(dt >= 1230 && dt < 1320){
      subt = subj[3];  
      st = today[3];
      ttp = tt[3];
    }  
    else{  
      st = noclass;
      ttp = "You're free (for now)";
    }
    if (st != noclass){
        teach.innerHTML = subt;
      
      let reg = /[0-9]{10,11}/;
      let theID = st.match(reg);
      
      let pass = 'Id: ' + theID + ' Password: ' + ttp.toLowerCase() + '@rumc';
      passbl.innerHTML = pass;

    //   createP( 'Id: ' + theID + '    Password: ' + ttp.toLowerCase() + '@rumc' ).id("analog");
      
    //   createA( st , 'Join Class' ).id("zoom");
    button.setAttribute('href', st);
    button.innerText = "Join Class";
    
    }else{
      teach.innerHTML = "There is no class currently"
      passbl.style.display = 'none';
      button.style.display = 'none';
    }
}, 1000);
  // let dt = 1040;
//   createA("https://facebook.com/sjshs", "Developer :Ihtesham Reza Alvee").id("facebook").class("social");

const verses = [
    { title: "Salmi 91:15", text: "Egli m'invocherà, e io gli risponderò; sarò con lui nei momenti difficili; lo libererò, e lo glorificherò." },
    { title: "Salmo 23:1", text: "Il Signore è il mio pastore, nulla mi manca." },
    { title: "Isaia 43:25", text: "Io, io, sono colui che per amor di me stesso cancello le tue trasgressioni e non mi ricorderò più dei tuoi peccati" },
    {title: "Luca 6:37", text:"Non giudicate e non sarete giudicati; non condannate e non sarete condannati; perdonate e vi sarà perdonato."},
    {title: "Salmi 119:9", text: "Come potrà il giovane rendere pura la sua via? Badando a essa mediante la tua parola."},
    {title: "Salmi 108:3", text: "Ti celebrerò tra i popoli, o Signore, e a te salmeggerò fra le nazioni."},
    {title: "Luca 12:24", text: "Osservate i corvi: non seminano, non mietono, non hanno dispensa né granaio, eppure Dio li nutre. E voi, quanto più degli uccelli valete!"},
    {title: "Romani 11:36", text: "Perché da lui, per mezzo di lui e per lui sono tutte le cose. A lui sia la gloria in eterno. Amen."},
    {title: "Efesini 4:26-27", text: "Adiratevi e non peccate; il sole non tramonti sopra la vostra ira e non fate posto al diavolo."},
  ];
  
  function populateCarousel(verses) {
    const carousel = document.getElementById("carouselExampleCaptions");
    const slides = carousel.getElementsByClassName("carousel-item");
    
    let randomVerses = [];
    while (randomVerses.length < slides.length) {
    let randomIndex = Math.floor(Math.random() * verses.length);
    if (!randomVerses.includes(randomIndex)) {
    randomVerses.push(randomIndex);
    }
    }
    
    for (let i = 0; i < slides.length; i++) {
    let verse = verses[randomVerses[i]];
    slides[i].getElementsByTagName("h5")[0].innerHTML = verse.title;
    slides[i].getElementsByTagName("p")[0].innerHTML = verse.text;
    }
    }
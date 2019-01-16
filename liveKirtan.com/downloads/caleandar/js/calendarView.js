var index= localStorage.getItem("id");


var events = [
  [
      {'Date': new Date(2019, 0, 10), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Onkar%20Singh/Bhai%20Onkar%20Singh%20%283.50am%20to%207.00am%29%2010-01-2019.mp3'},
      {'Date': new Date(2019, 0, 7), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Onkar%20Singh/Bhai%20Onkar%20Singh%20%284.20pm%20to%206.00pm%29%2007-01-2019.mp3'}
  ],
  [
      {'Date': new Date(2018, 07, 15), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Dalbir%20Singh/Bhai%20Dalbir%20Singh%20%20%286.35pm%20to%207.20pm%29%2015-08-2018.mp3'},
      {'Date': new Date(2018, 08, 3), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Dalbir%20Singh/Bhai%20Dalbir%20Singh%20%2811.00am%20to%2012.00pm%29%2003-09-2018.mp3'}
  ],
  [
      {'Date': new Date(2019, 0, 1), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Gurdev%20Singh/Bhai%20Gurdev%20Singh%20%286.00pm%20to%207.30pm%29%2001-01-2019.mp3'},
      {'Date': new Date(2019, 0, 3), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Gurdev%20Singh/Bhai%20Gurdev%20Singh%20%287.00am%20to%208.00am%29%2003-01-2019.mp3'}
  ],
  [
      {'Date': new Date(2018, 7, 16), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Jabartoar%20Singh/Bhai%20Jabartoar%20Singh%20%28%201.30pm%20to%203.00pm%29%2016-08-2018.mp3'},
      {'Date': new Date(2018, 6, 25), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Jabartoar%20Singh/Bhai%20Jabartoar%20Singh%20%28%204.20pm%20to%205.35pm%29%2025-07-2018.mp3'}
  ],
  [
      {'Date': new Date(2019, 0, 8), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Jagtar%20Singh/Bhai%20Jagtar%20Singh%20%283.50am%20to%207.00am%29%2008-01-2019.mp3'},
      {'Date': new Date(2019, 0, 10), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Jagtar%20Singh/Bhai%20Jagtar%20Singh%20%286.00pm%20to%207.30pm%29%2010-01-2019.mp3'}
  ],
  [
      {'Date': new Date(2019, 0, 10), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Rai%20Singh/Bhai%20Rai%20Singh%20%283.00am%20to%203.50am%29%2010-01-2019.mp3'},
      {'Date': new Date(2018, 9, 17), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Rai%20Singh/Bhai%20Rai%20Singh%20%2810.00am%20to%2011.00am%29%2017-10-2018.mp3'}
  ],
  [
      {'Date': new Date(2019, 0, 3), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Satnam%20Singh%20K/Bhai%20Satnam%20Singh%20K.%20%284.20pm%20to%205.40pm%29%2003-01-2019.mp3'},
      {'Date': new Date(2018, 9, 23), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Satnam%20Singh%20K/Bhai%20Satnam%20Singh%20K.%20%287.10am%20to%208.00am%29%2023-10-2018.mp3'}
  ],
  [
      {'Date': new Date(2019, 0, 2), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Sukhjit%20Singh/Bhai%20Sukhjit%20Singh%20%28%201.10pm%20to%202.20pm%29%2002-01-2019.mp3'},
      {'Date': new Date(2019, 0, 6), 'Title': 'Kirtan', 'Link': 'http://new.sgpc.net/kirtan-rec/Raagi%20Wise/Bhai%20Sukhjit%20Singh/Bhai%20Sukhjit%20Singh%20%283.50am%20to%207.00am%29%2006-01-2019.mp3'}
  ]
  

];
var settings = {
    Color: 'pink',
    LinkColor: 'red',
    NavShow: true,
    NavVertical: false,
    NavLocation: '',
    DateTimeShow: true,
    DateTimeFormat: 'mmm, yyyy',
    DatetimeLocation: '',
    EventClick: '',
    EventTargetWholeDay: false,
    DisabledDays: [],         
  };
var element = document.getElementById('caleandar');
caleandar(element, events[index], settings);
localStorage.removeItem("id");

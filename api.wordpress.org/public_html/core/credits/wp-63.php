<?php

class WP_63_Credits extends WP_Credits {

	public function groups() {
		$groups = [
			'core-developers'         => [
				'name'    => 'Noteworthy Contributors',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => [
					'matveb'              => [ 'Matias Ventura', 'Release Lead' ],
					'francina'            => [ 'Francesca Marano', 'Release Lead' ],
					'priethor'            => [ 'Héctor Prieto', 'Release Lead' ],
					'azaozz'              => 'Andrew Ozz',
					'mikeschroder'        => 'Mike Schroder',
					'davidbaumwald'       => 'David Baumwald',
					'isabel_brison'       => 'Isabel Brison',
					'ramonopoly'          => 'Ramon James',
					'audrasjb'            => 'Jean-Baptiste Audras',
					'chaion07'            => 'Ahmed Chaion',
					'mukesh27'            => 'Mukesh Panchal',
					'oglekler'            => 'Olga Gleckler',
					'annezazu'            => 'Anne McCarthy',
					'bph'                 => 'Birgit Pauli-Haack',
					'ndiego'              => 'Nick Diego',
					'firoz2456'           => 'Firoz Sabaliya',
					'femkreations'        => 'Femy Praseeth',
					'stevenlinx'          => 'Steven Lin',
					'leonnugraha'         => 'Leonardus Nugraha',
					'611shabnam'          => 'Mushrit Shabnam',
					'dansoschin'          => 'Dan Soschin',
					'jpantani'            => 'Jonathan Pantani',
					'meher'               => 'Meher Bala',
					'ironprogrammer'      => 'Brian Alexander',
					'webtechpooja'        => 'Pooja Derashri',
					'chrismalone617'      => 'Chris Malone',
					'Boniu91'             => 'Piotrek Boniu',
					'karmatosed'          => 'Tammie Lister',
					'richtabor'           => 'Rich Tabor',
					'flixos90'            => 'Felix Arntz',
					'clarkeemily'         => 'Emily Clarke',
					'SergeyBiryukov'      => 'Sergey Biryukov',
					'spacedmonkey'        => 'Jonny Harris',
					'Mamaduka'            => 'George Mamadashvili',
					'costdev'             => 'Colin Stewart',
					'andrewserong'        => 'Andrew Serong',
					'youknowriad'         => 'Riad Benguella',
					'wildworks'           => 'Aki Hamano',
					'scruffian'           => 'Ben Dwyer',
					'ntsekouras'          => 'Nik Tsekouras',
					'peterwilsoncc'       => 'Peter Wilson',
 					'Joen'                => 'Joen Asmussen',
					'jameskoster'         => 'James Koster',
					'saxonfletcher'       => 'Saxon Fletcher',
				],
			],
			'contributing-developers' => [
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => [
					'poena'               => 'Carolina Nymark',
					'get_dave'            => 'David Smith',
					'sabernhardt'         => 'Stephen Bernhardt',
					'afercia'             => 'Andrea Fercia',
					'tyxla'               => 'Marin Atanasov',
					'joedolson'           => 'Joe Dolson',
					'aaronrobertshaw'     => 'Aaron Robertshaw',
					'hellofromTonya'      => 'Tonya Mork',
					'aristath'            => 'Ari Stathopoulos',
					'mciampini'           => 'Marco Ciampini',
					'talldanwp'           => 'Daniel Richards',
					'ellatrix'            => 'Ella van Durpe',
					'johnbillion'         => 'John Blackbourn',
					'joemcgill'           => 'Joe McGill',
					'westonruter'         => 'Weston Ruter',
					'oandregal'           => 'André Maneiro',
					'glendaviesnz'        => 'Glen Davies',
					'kevin940726'         => 'Kai Hao',
					'jsnajdr'             => 'Jarda Snajdr',
					'0mirka00'            => 'Lena Morita',
					'carlosgprim'         => 'Carlos Garcia',
					'noisysocks'          => 'Robert Anderson',
					'desrosj'             => 'Jonathan Desrosiers',
					'swissspidy'          => 'Pascal Birchler',
					'jrf'                 => 'Juliette Reinders Folmer',
					'ajlende'             => 'Alex Lende',
					'jeryj'               => 'Jerry Jones',
					'webcommsat'          => 'Abha Thakor',
				],
			],
		];

		return $groups;
	}

	public function props() {
		return [
			'0mirka00',
			'10upsimon',
			'6adminit',
			'aaronrobertshaw',
			'ababir',
			'abhi3315',
			'abitofmind',
			'adamsilverstein',
			'adarshposimyth',
			'adeltahri',
			'adi3890',
			'afercia',
			'afragen',
			'ahsannayem',
			'ajlende',
			'akbigdog',
			'akmelias',
			'akrocks',
			'albatross10',
			'alexandrelara',
			'alexstine',
			'algorithmsunlocks',
			'allancole',
			'alvitazwar052',
			'amansurov',
			'amin7',
			'anatolikkk',
			'anatoliyav',
			'andizer',
			'andraganescu',
			'andrewserong',
			'andy786',
			'anilvaza',
			'ankit-k-gupta',
			'ankitmaru',
			'annashopina',
			'annebovelett',
			'annezazu',
			'annziel',
			'antonvlasenko',
			'antonyagrios',
			'antpb',
			'anver',
			'anveshika',
			'apeatling',
			'apermo',
			'arafatjamil01',
			'aristath',
			'artemiosans',
			'arthur791004',
			'ashikurwp',
			'atimmer',
			'audrasjb',
			'aurooba',
			'austinginder',
			'awarner20',
			'ayeshrajans',
			'azaozz',
			'azizantoun',
			'aznadesign',
			'azouamauriac',
			'bacoords',
			'bangank36',
			'bartkalisz',
			'batmoo',
			'beckej',
			'benjgrolleau',
			'benjibee',
			'benlk',
			'bernhard-reiter',
			'bgardner',
			'bgoewert',
			'bhrugesh12',
			'bi0xid',
			'bijayyadav',
			'bitmachina ',
			'bitnissen',
			'boemedia',
			'boniu91',
			'bookdude13',
			'boonebgorges',
			'bor0',
			'bpayton',
			'bph',
			'brasofilo',
			'bridgetwillard',
			'bronsonquick',
			'brookedot',
			'brookemk',
			'cadic',
			'caraffande',
			'carlosgprim',
			'cathibosco1',
			'cawa-93',
			'cbravobernal',
			'cbringmann',
			'ceer',
			'chaion07',
			'chanthaboune',
			'chintan1896',
			'chiragrathod103',
			'chouby',
			'chriscct7',
			'ckoerner',
			'clarkeemily',
			'clorith',
			'clubkert',
			'codemonksuvro',
			'codeamp',
			'coffee2code',
			'corentingautier',
			'costdev',
			'courane01',
			'crixu',
			'crs1138',
			'crstauf',
			'cshark',
			'cybr',
			'czapla',
			'daisyo',
			'danielbachhuber',
			'dansoschin',
			'danyk4',
			'darerodz',
			'darshitrajyaguru97',
			'davidbaumwald',
			'davidbinda',
			'davidmusnik',
			'davidwebca',
			'dbernar1',
			'dd32',
			'deepakvijayan',
			'denis-de-bernardy',
			'dennysdionigi',
			'densityapps',
			'derekblank',
			'desrosj',
			'dharm1025',
			'dhrumilk',
			'dhrupo',
			'dhruvishah2203',
			'digtek',
			'dilipbheda',
			'dimijazz',
			'dingo_d',
			'dlh',
			'dmsnell',
			'doems',
			'dpcalhoun',
			'drewapicture',
			'drw158',
			'dsar',
			'dsas',
			'dunhakdis',
			'dustyreagan',
			'ebai4',
			'eboxnet',
			'ecgan',
			'ecorica',
			'eduwass',
			'ehsanakhgari',
			'ehtis',
			'eidolonnight',
			'ellatrix',
			'emirpprime',
			'empireoflight',
			'enchiridion',
			'enderandpeter',
			'eric7186',
			'ernest35',
			'estelaris',
			'fabiankaegy',
			'faisalahammad',
			'falgunihdesai',
			'felipeelia',
			'fencermonir',
			'fierevere',
			'filosofo',
			'fischfood',
			'flixos90',
			'flootr',
			'francina',
			'frank-klein',
			'frankit',
			'franrosa',
			'fullofcaffeine',
			'gaambo',
			'gaeldenysiak',
			'galbaras',
			'garyc40',
			'garyj',
			'geriux',
			'get_dave',
			'gigitux',
			'gilles66',
			'gitlost',
			'glendaviesnz',
			'gonzomir',
			'grandslambert',
			'grantmkin',
			'gudmdharalds',
			'guillaumeturpin',
			'gvgvgvijayan',
			'gziolo',
			'hareesh-pillai',
			'haritpanchal',
			'harshgajipara',
			'hasanmisbah',
			'hasanuzzamanshamim',
			'hazdiego',
			'hberberoglu',
			'hbhalodia',
			'heiko_mamerow',
			'helen',
			'helgatheviking',
			'hellofromtonya',
			'hideokamoto',
			'hilayt24',
			'hrdelwar',
			'hrrarya',
			'hugobaeta',
			'hugod',
			'huzaifaalmesbah',
			'hztyfoon',
			'iamasadpolash',
			'iamfarhan09',
			'ianbelanger',
			'iandunn',
			'ibrahimmonir',
			'ideag',
			'ignatggeorgiev',
			'imanish003',
			'inc2734',
			'intoxination',
			'ipstenu',
			'ironprogrammer',
			'isabel_brison',
			'itowhid06',
			'jacknotman',
			'jahidcse',
			'jakariaistauk',
			'james-roberts',
			'james0r',
			'jameskoster',
			'janboddez',
			'jane',
			'jankyz',
			'janpaulkleijn',
			'javiercasares',
			'jbcouton',
			'jeffmora',
			'jeffpaul',
			'jenilk',
			'jenmylo',
			'jeremyfelt',
			'jeroenrotty',
			'jeryj',
			'jffng',
			'jhabdas',
			'jhnstn',
			'jigar-bhanushali',
			'joedolson',
			'joemcgill',
			'joen',
			'johnbillion',
			'johnjamesjacoby',
			'jomonthomaslobo1',
			'joostdevalk',
			'jorbin',
			'jordesign',
			'jorgefilipecosta',
			'josepmoran',
			'josklever',
			'joyously',
			'jpantani',
			'jqz',
			'jrf',
			'jsnajdr',
			'jsnjohnston',
			'juanfra',
			'juanmaguitar',
			'juzar',
			'kadamwhite',
			'kafleg',
			'kajalgohel',
			'kamplugins',
			'kapilpaul',
			'karmatosed',
			'karolmanijak',
			'kausaralm',
			'kebbet',
			'kenwins',
			'kevin940726',
			'kevinb',
			'khoipro',
			'khokansardar',
			'kjellr',
			'knutsp',
			'koenschipper',
			'kraftbj',
			'krishneup',
			'krunal265',
			'krupajnanda',
			'krupalpanchal',
			'kutsu',
			'kzeni',
			'lanacodes',
			'laurelfulford',
			'laurentmagnin',
			'laurlittle',
			'leamcaleese',
			'leprincenoir',
			'lessbloat',
			'levdbas',
			'lgadzhev',
			'lowlydev',
			'lphoumpakka',
			'luehrsen',
			'luisherranz',
			'lukecavanagh',
			'madejackson',
			'madhudollu',
			'madtownlems',
			'mahamudur78',
			'mahendra0029',
			'mai21',
			'majaloncar',
			'malae',
			'malavvasita',
			'mamaduka',
			'manfcarlo',
			'maniu',
			'marcguay',
			'marekdedic',
			'margolisj ',
			'marianne38',
			'marineevain',
			'markdoliner',
			'markjaquith',
			'markoheijnen',
			'markoserb',
			'markparnell',
			'martinkrcho',
			'marybaum',
			'masteradhoc',
			'mastrup',
			'mat-lipe',
			'mathsgrinds',
			'matmoe',
			'matt',
			'matt_fw',
			'matteoenna',
			'mattwiebe',
			'matveb',
			'maurodf',
			'maxcgparis',
			'maysi',
			'mayur8991',
			'mboynes',
			'mburridge',
			'mcalyster',
			'mciampini',
			'mcliwanow',
			'mcsf',
			'mdawaffe',
			'mdxfr',
			'megane9988',
			'mehdi01',
			'meher',
			'melchoyce',
			'menakas',
			'mensmaximus',
			'mgol',
			'michaelh',
			'mikachan',
			'mikecho',
			'mikeday',
			'mikeschinkel',
			'mikeschroder',
			'mikeyzm',
			'mikinc860',
			'milana_cap',
			'mista-flo',
			'mitchellaustin',
			'mitchoyoshitaka',
			'mkox',
			'mmaattiiaass',
			'mohanrajp',
			'mohiuddinomran',
			'moinrrahmed',
			'mokagio',
			'monzuralam',
			'mor10',
			'mrasharirfan',
			'mrdollu',
			'mrflannagan',
			'mrfoxtalbot',
			'mrinal013',
			'mt_suzette',
			'mte90',
			'mtxz',
			'mujuonly',
			'mukesh27',
			'mwtsn',
			'n2erjo00',
			'nacin',
			'nadimcse',
			'naeemhaque',
			'nant82',
			'narthur',
			'nataliat2004',
			'nateallen',
			'nazgul',
			'nazmul111',
			'nazmulhudadev',
			'ndiego',
			'nekojonez',
			'nendeb55',
			'neychok',
			'nickpap',
			'nidhidhandhukiya',
			'nihar007',
			'nilovelez',
			'nithi22',
			'nithins53',
			'njsamsatli',
			'nkeller15',
			'noahtallen',
			'noisysocks',
			'nomnom99',
			'nrqsnchz',
			'ntsekouras',
			'nuhel',
			'oandregal',
			'obliviousharmony',
			'ocean90',
			'oglekler',
			'olliejones',
			'onemaggie',
			'opr18',
			'orestissam',
			'otto42',
			'ov3rfly',
			'owi',
			'paaljoachim',
			'pamprn',
			'panchalhimani711',
			'paragoninitiativeenterprises',
			'pateljaymin',
			'patelmohip',
			'patriciahillebrandt',
			'paulkevan',
			'paulopmt1',
			'pavanpatil1',
			'pbiron',
			'pbking',
			'pedromendonca',
			'pento',
			'peterwilsoncc',
			'phillsav',
			'pitamdey',
			'piyushtekwani',
			'pkbhatt',
			'platonkristinin',
			'poena',
			'polevaultweb',
			'pooja1210',
			'pouicpouic',
			'prashantbhivsane',
			'prashantvatsh',
			'pravinparmar2404',
			'presskopp',
			'priethor',
			'prikari',
			'przemekhernik',
			'pschrottky',
			'r0uter',
			'rachelbaker',
			'rahmohn',
			'rajanpanchal2028',
			'rajinsharwar',
			'ramonopoly',
			'rarst',
			'ratneshsonar',
			'ravanh',
			'rehanali',
			'rembem',
			'renyot',
			'reputeinfosystems',
			'rfischmann',
			'rianrietveld',
			'richards1052',
			'richiecarey',
			'richtabor',
			'rjasdfiii',
			'rmccue',
			'rob1n',
			'robinwpdeveloper',
			'ronakganatra',
			'rsiddharth',
			'rudlinkon',
			'rutviksavsani',
			'ryan',
			'ryankienstra',
			'ryelle',
			'ryokuhi',
			'sabernhardt',
			'sabreuse',
			'sajjad67',
			'sakibmd',
			'salvoaranzulla',
			'samful',
			'samiamnot',
			'samnajian',
			'sanchothefat',
			'santosguillamot',
			'sarequl',
			'saxonfletcher',
			'sboerrigter',
			'sccr410',
			'scep',
			'scribu',
			'scruffian',
			'sdavis2702',
			'sebastienserre',
			'sereedmedia',
			'sergeybiryukov',
			'sergiomdgomes',
			'sh4lin',
			'shagors',
			'shailu25',
			'shelob9',
			'shimotomoki',
			'shiponkarmakar',
			'shireling',
			'shreyasikhar26',
			'shubhamsedani',
			'shuvo247',
			'shuvo586',
			'shuvoaftab',
			'shvv',
			'shwetabathani2312',
			'siddhantwadhwani',
			'simonemanfre',
			'siobhan',
			'sirajummahdi',
			'sjoerdlinders',
			'skithund',
			'skorasaurus',
			'smit08',
			'soean',
			'softwortech',
			'soulseekah',
			'spacedmonkey',
			'sque',
			'srikanthmeenakshi',
			'sstoqnov',
			'strategio',
			'studionashvegas',
			'subrataemfluence',
			'sudipatel007',
			'suleymankenar',
			'sumitbagthariya16',
			'sumitsingh',
			'sunyatasattva',
			'suzettefranck',
			'swissspidy',
			'syamraj24',
			'synchro',
			'szepeviktor',
			'tacoverdo',
			'tahmina1du',
 			'takshil',
			'talldanwp',
			'tanner-m',
			'tb1909',
			'thakkarhardik',
			'thakordarshil',
			'thekt12',
			'thisisyeasin',
			'thomasdevisser',
			'thomask',
			'thunderdw',
			'tijmensmit',
			'tillkruess',
			'timothyblynjacobs',
			'tjnowell',
			'tmatsuur',
			'tobiasbg',
			'tobifjellner',
			'toro_unit',
			'trepmal',
			'tushar284',
			'twstokes',
			'tyb',
			'tyrannous',
			'tyxla',
			'ugyensupport',
			'umesh84',
			'umeshmcakadi',
			'upadalavipul',
			'utsav72640',
			'uxtremist',
			'valterlorran',
			'vanaf1979',
			'vasilism',
			'victoranto',
			'vivekawsm',
			'vladytimy',
			'voldemortensen',
			'walbo',
			'webcommsat',
			'webtechpooja',
			'welcher',
			'westi',
			'westonruter',
			'whaze',
			'wildworks',
			'williampatton',
			'wlindley',
			'wojtekszkutnik',
			'wonderboymusic',
			'worldomonation',
			'wpe_bdurette',
			'wpfy',
			'wplindavantol',
			'wplmillet',
			'wpnook',
			'wtower',
			'xavortm',
			'xerpa43',
			'xknown',
			'xkon',
			'xmarcos',
			'yaniiliev',
			'youknowriad',
			'zdrobau',
			'zebaafiashama',
			'zebulan',
			'zenaulislam',
			'zgrkaralar',
			'zieladam',
			'zodiac1978',
			'zoonini',
			'zunaid321',
		];
	}

	public function external_libraries() {
		return [
			[ 'Babel Polyfill', 'https://babeljs.io/docs/en/babel-polyfill' ],
			[ 'Backbone.js', 'http://backbonejs.org/' ],
			[ 'Class POP3', 'https://squirrelmail.org/' ],
			[ 'clipboard.js', 'https://clipboardjs.com/' ],
			[ 'Closest', 'https://github.com/jonathantneal/closest' ],
			[ 'CodeMirror', 'https://codemirror.net/' ],
			[ 'Color Animations', 'https://plugins.jquery.com/color/' ],
			[ 'getID3()', 'http://getid3.sourceforge.net/' ],
			[ 'FormData', 'https://github.com/jimmywarting/FormData' ],
			[ 'Horde Text Diff', 'https://pear.horde.org/' ],
			[ 'hoverIntent', 'http://cherne.net/brian/resources/jquery.hoverIntent.html' ],
			[ 'imgAreaSelect', 'http://odyniec.net/projects/imgareaselect/' ],
			[ 'Iris', 'https://github.com/Automattic/Iris' ],
			[ 'jQuery', 'https://jquery.com/' ],
			[ 'jQuery UI', 'https://jqueryui.com/' ],
			[ 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ],
			[ 'jQuery serializeObject', 'http://benalman.com/projects/jquery-misc-plugins/' ],
			[ 'jQuery.query', 'https://plugins.jquery.com/query-object/' ],
			[ 'jQuery.suggest', 'https://github.com/pvulgaris/jquery.suggest' ],
			[ 'jQuery UI Touch Punch', 'http://touchpunch.furf.com/' ],
			[ 'json2', 'https://github.com/douglascrockford/JSON-js' ],
			[ 'Lodash', 'https://lodash.com/' ],
			[ 'Masonry', 'http://masonry.desandro.com/' ],
			[ 'MediaElement.js', 'http://mediaelementjs.com/' ],
			[ 'Moment', 'http://momentjs.com/' ],
			[ 'PclZip', 'http://www.phpconcept.net/pclzip/' ],
			[ 'PemFTP', 'https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html' ],
			[ 'phpass', 'http://www.openwall.com/phpass/' ],
			[ 'PHPMailer', 'https://github.com/PHPMailer/PHPMailer' ],
			[ 'Plupload', 'http://www.plupload.com/' ],
			[ 'random_compat', 'https://github.com/paragonie/random_compat' ],
			[ 'React', 'https://reactjs.org/' ],
			[ 'Redux', 'https://redux.js.org/' ],
			[ 'Requests', 'http://requests.ryanmccue.info/' ],
			[ 'SimplePie', 'http://simplepie.org/' ],
			[ 'The Incutio XML-RPC Library', 'https://code.google.com/archive/p/php-ixr/' ],
			[ 'Thickbox', 'http://codylindley.com/thickbox/' ],
			[ 'TinyMCE', 'https://www.tinymce.com/' ],
			[ 'Twemoji', 'https://github.com/twitter/twemoji' ],
			[ 'Underscore.js', 'http://underscorejs.org/' ],
			[ 'whatwg-fetch', 'https://github.com/github/fetch' ],
			[ 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ],
		];
	}
}


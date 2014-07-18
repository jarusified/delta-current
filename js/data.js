var myApp = angular.module('ContactUsApp', []);

myApp.controller('ConcCtrl', ['$scope', function ($scope) {

    $scope.bios = {};
                                                    //Fetch this object from the server
													
    $scope.bios.profile = [{"name": "Deepak R",			//  Include data here for contacts page
        "desc": "Does a whole lot of cool stuff we don't necessarily understand.",
		"area": "WEBDEV",
		"git": "steve",
		"email": "admin@localhost.com",
		"id":"1",
		"src":"img/contacts/4th/deepak.jpg"
    },{"name": "Jude Naveen Raj",
		"area": "APPDEV",
		"git": "",
		"email": "admin@localhost.com",
		"id":"2",
		"src":"img/contacts/4th/jude.jpg"
    },{"name": "Shriram",
		"area": "WEBDEV",
		"git": "steve",
		"email": "admin@localhost.com",
		"phno": "911",
		"id":"3",
		"src":"img/contacts/4th/shriram.jpg"
    },{ "name": "Mythreya",
		"area": "WEBDEV",
		"git": "steve",
		"email": "admin@localhost.com",
		"id":"4",
		"src":"img/contacts/4th/mythreya.jpg"
    },{"name": "Vignesh",
		"area": "WEBDEV",
		"git": "steve",
		"email": "admin@localhost.com",
		"src":"img/contacts/4th/pokka.jpg",
		"id":"5"
    },{"name": "Hari",
		"area": "WEBDEV",
		"git": "steve",
		"email": "admin@localhost.com",
		"src":"img/contacts/4th/hari.jpg",
		"id":"6"
    },{"name": "harish",
		"area": "SYS ADMIN",
		"git": "steve",
		"email": "admin@localhost.com",
		"src":"img/contacts/4th/harish.jpg",
		"id":"7"
    },{"name": "suraj",
		"area": "WEB DESIGN",
		"git": "steve",
		"email": "admin@localhost.com",
		"src":"img/contacts/4th/suraj.jpg",
		"id":"8"
    },{"name": "Parameswaran",
		"area": "WEBDEV",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/para.jpg",
		"id":"9"
    },{"name": "Vasuman",
		"area": "APPDEV",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/vasu.jpg",
		"id":"10"
    },{"name": "Nirvick",
		"area": "APPDEV",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/nirvik.jpg",
		"id":"11"
    },{"name": "Rohan",
		"area": "APPDEV",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/Rohan.jpg",
		"id":"12"
    },{"name": "Prasanna",
		"area": "WEBDEV",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/prasan.jpg",
		"id":"13"
    },{"name": "Varun",
		"area": "WEBDEV",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/varun.jpg",
		"id":"14"
    },{"name": "Dishant",
		"area": "SYS ADMIN",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/Dishant.jpg",
		"id":"15"
    },{"name": "Vikash",
		"area": "SYS ADMIN",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/vikash.jpg",
		"id":"16"
    },{"name": "Kumarappan",
		"area": "WEBDEV",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/kumara.jpg",
		"id":"17"
    },{"name": "Pankaj",
		"area": "WEBDEV",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/pankaj.jpg",
		"id":"18"
    },{"name": "Subodh",
		"area": "WEBDEV",
		"git": "http://www.github.com/hsemarap",
		"email": "hsemarap@gmail.com",
		"src":"img/contacts/3rd/subodh.jpg",
		"id":"19"
    },{"name": "Harish",
		"area": "APPDEV",
		"git": "steve",
		"email": "admin@localhost.com",
		"src":"img/contacts/2nd/harish.jpg",
		"id":"20"
    },{"name": "Sujay Vetrivelan",
		"area": "APPDEV",
		"git": "https://github.com/SVetri",
		"email": "sujay.vetri@gmail.com",
		"src":"img/contacts/2nd/sujay.jpg",
		"id":"21"
    },{"name": "Ashutosh Nath Agarwal",
		"area": "WEBDEV",
		"git": "https://github.com/ash7594",
		"email": "ashutosh.nath.agarwal@gmail.com",
		"src":"img/contacts/2nd/ashu.jpg",
		"id":"22"
    },{"name": "Vivek",
		"area": "SYS ADMIN",
		"git": "https://github.com/viveksiva",
		"email": "sacr3dpixel@gmail.com",
		"id":"23",
		"src":"img/contacts/2nd/siva.jpg",
    },{"name": "Anantha Natarajan S",
		"area": "WEBDEV",
		"git": "https://github.com/sananth12",
		"email": "sananthanatarajan12@gmail.com",
		"src":"img/contacts/2nd/ananth.jpg",
		"id":"25"
    },{"name": "Hemapriya",
		"area": "AppDev",
		"git": "https://github.com/Hema02",
		"email": "hema02hp@gmail.com",
		"src":"img/contacts/2nd/Hema.jpg",
		"id":"26"
    },{"name": "Suraj Jarus",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/suraj.jpg",
		"id":"44"
    },{"name": "Akhila Yerukola",
		"area": "APPDEV",
		"git": "https://github.com/Akhila-Yerukola",
		"email": "yerukolaakhila@gmail.com",
		"src":"img/contacts/2nd/Akhila.jpg",
		"id":"28"
    },{"name": "Sriram Sundarraj",
		"area": "WEBDEV",
		"git": "http://github.com/srirams6",
		"email": "sriram.s.1994@gmail.com ",
		"src":"img/contacts/2nd/mangu.jpg",
		"id":"29"
    },{"name": "Juan John Mathews",
		"area": "WEBDEV",
		"git": "https://github.com/juanjohn",
		"email": "juanjhn@gmail.com",
		"src":"img/contacts/2nd/Juan.jpg",
		"id":"30"
    },{"name": "Amal Syriac",
		"area": "WEBDEV",
		"git": "https://github.com/amal1293",
		"email": "amal1293@gmail.com",
		"src":"img/contacts/2nd/amal.jpg",
		"id":"31"
    },{"name": "Abhishek Kaushik",
		"area": "WEBDEV",
		"git": "https://github.com/stndlkr200",
		"email": "stndlkr200@gmail.com",
		"src":"img/contacts/2nd/Abhi.jpg",
		"id":"32"
    },{"name": "Karthikeyan",
		"area": "WEBDEV",
		"git": "https://github.com/bkarthikeyan28",
		"email": "bkarthikeyan28@hotmail.com",
		"src":"img/contacts/2nd/karthi.jpg",
		"id":"33"
    },{"name": "Vignesh",
		"area": "SYS ADMIN",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/vignesh.jpg",
		"id":"34"
    },{"name": "Afreen",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/Afreen.jpg",
		"id":"35"
    },{"name": "Ajay",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/ajay.jpg",
		"id":"36"
    },{"name": "Charumathi",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/Charu.JPG",
		"id":"37"
    },{"name": "Arun sai",
		"area": "APPDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/arun.jpg",
		"id":"38"
    },{"name": "Giridhar",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/giridar.jpg",
		"id":"39"
    },{"name": "John mathai",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/john.jpg",
		"id":"40"
    },{"name": "Karthik Vijay",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/pck.jpg",
		"id":"41"
    },{"name": "Sarvesh",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/sarvesh.jpg",
		"id":"42"
    },{"name": "Mohit",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/mohit.jpg",
		"id":"43"
    },{"name": "somya",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/somya.jpg",
		"id":"44"
    },{"name": "anjali",
		"area": "WEBDEV",
		"git": "",
		"email": "",
		"src":"img/contacts/2nd/anjali.jpg",
		"id":"45"
    }

	];
}]);

myApp.controller('Ctrl', ['$scope', function ($scope) {

    $scope.bios = {};
                                                    //Fetch this object from the server
													
    $scope.bios.profile = [{						// Include data here for portals page
		"portal": "Delta",
        "link": "delta.nitt.edu",
		"src" :"img/portals/delta.jpg"
    },
	{
		"portal": "RMI",
        "link": "",
		"src" :"img/portals/rmi.jpg"
	},
	{
		"portal": "3d",
        "link": "",
		"src" :"img/portals/3d.jpg"
    },
	{
		"portal": "aayam",
        "link": "Title goes here",
		"src" :"img/portals/aayam.jpeg"
    },
	{
		"portal": "amruthavarshini",
        "link": "",
		"src" :"img/portals/amruth.jpg"
    },
	{
		"portal": "apeksha",
        "link": "",
		"src" :"img/portals/apeksha.jpg"
    },
	{
		"portal": "connect NITT",
        "link": "",
		"src" :"img/portals/connect.jpg"
    },
	{
		"portal": "E-CELL",
        "link": "",
		"src" :"img/portals/ecell.jpg"
    },
	{
		"portal": "Feeds",
        "link": "",
		"src" :"img/portals/feeds.jpg"
    },
	{
		"portal": "Frappe",
        "link": "",
		"src" :"img/portals/frappe.jpg"
    },
	{
		"portal": "leap",
        "link": "",
		"src" :"img/portals/leap.jpg"
    },
	{
		"portal": "leo",
        "link": "",
		"src" :"img/portals/leo.jpg"
    },
	{
		"portal": "Music troupe",
        "link": "",
		"src" :"img/portals/mt.jpg"
    },
	{
		"portal": "Office of alumni relations",
        "link": "",
		"src" :"img/portals/oar.jpg"
    },
	{
		"portal": "nakshatra",
        "link": "",
		"src" :"img/portals/nakshatra.jpg"
    },
	{
		"portal": "phoenix",
        "link": "",
		"src" :"img/portals/phoenix.jpg"
    },
	{
		"portal": "rotract",
        "link": "",
		"src" :"img/portals/rotract.jpg"
    },
	{
		"portal": "spider",
        "link": "",
		"src" :"img/portals/spider.jpg"
    }
	];

}]);

myApp.controller('Project-up', ['$scope', function ($scope) {

    $scope.bios = {};
                                                    //Fetch this object from the server
													
    $scope.bios.profile = [{						// Include data here for projects page
		"project": "Pragyan CMS",
		"src" :"img/projects/pragyan.jpg",
		"id":"#content_cms"
    },
	{
		"project": "Courses App",
		"src" :"img/projects/coursesapp.jpg",
		"id":"#content_courses"
	},
	{
		"project": "Gracenote",
		"src" :"img/projects/gracenote.jpg",
		"id":"#content_gracenote"
    }
	];

}]);

myApp.controller('Project-down', ['$scope', function ($scope) {

    $scope.bios = {};
                                                    //Fetch this object from the server
													
    $scope.bios.profile = [{						// Include data here for projects page
		"project": "Grunt-ffdevtools",
		"src" :"img/projects/gruntffdevtools.jpg",
		"id":"#grunt_ffdevtools"
    },
	{
		"project": "Luapegjs",
		"src" :"img/projects/lua.jpg",
		"id":"#luapegjs"
	}
	];

}]);

myApp.controller('Project-readme', ['$scope', function ($scope) {

    $scope.bios = {};							    //Fetch this object from the server							
    
	$scope.bios.profile = [{						// Include data here for projects page
		"project": "Pragyan CMS",
		"git" :"https://github.com/delta/pragyan",
		"id":"content_cms"
    },
	{
		"project": "Courses Hub",
		"git" :"https://github.com/seekshiva/courses",
		"id":"content_courses"
	},
	{
		"project": "Gracenote",
		"git": "https://github.com/nobelium/gracenote",
		"id":"content_gracenote"
    },
	{
		"project": "Grunt-ffdevtools",
		"git":"https://github.com/deepak1556/grunt-ffdevtools",
		"id":"grunt_ffdevtools"
    },
	{
		"project": "Luapegjs",
		"git":"https://github.com/deepak1556/luapegjs",
		"id":"luapegjs"
    }
	];

}]);

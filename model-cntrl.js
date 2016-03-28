var app = angular.module('yawDesigns', []);


app.controller('data', function($scope) {
$scope.work1 = [
{
link: 'http://organizations.mercer.edu/asa',
img: '/image/mercer.gif',
alt: 'Mercer University ASA, Macon, GA/From Scratch'
},
{
link: 'http://www.mdanderson.org',
img: '/image/md.PNG',
alt: 'MDAnderson, Atlanta, GA/Assemble,Grunt'
},
{
link: 'http://invis.io/RX2BAEZH7',
img: '/image/kikoff.jpg',
alt: 'KikOff app UI/UX design'
}
];

$scope.work2 = [
{
link: 'http://create.yawdesigns.com',
img: '/image/create.gif',
alt: 'Create Series 2/From scratch'
},
{
link: 'http://www.atrique.com',
img: '/image/atrique.jpg',
alt: 'Atrique Clothing/From scratch'
},
{
link: 'http://idea.yawdesigns.com',
img: '/image/create2.gif',
alt: 'Create Series 1/From scratch'
},
];

});

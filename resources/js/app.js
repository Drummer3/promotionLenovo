require('./bootstrap');
require('alpinejs');


if ($('#category').length) {
    $('#category').on('change', function(e){
        $('#category').parent().parent().children().not(':first-child').remove();
        cat = e.target.value;
        $.get(
            'adaptive/'+cat,
            function(data){
                $('#form').append(data);
            }    
        );
    })
}


$('.deleteButton').on('click', function (e) {
    deletingid = e.currentTarget.id;
    $.get(
        'modal/delete/'+deletingid,
        function(data){
            $('body').append(data);
        }    
    );
});

let shops = {
    'alta':[
        {
            key:'Tsintsadze 5',
            value: 'tsintsadze5'
        },
        {
            key: 'City Mall Saburtalo',
            value: 'CityMall_Saburtalo'
        },
        {
            key: 'City Mall Gldani',
            value: 'CityMall_Gldani'
        },
        {
            key: 'Tbilisi Central',
            value: 'tbilisi_Central'
        },
        {
            key: 'Tbilisi Mall',
            value: 'tbilisi_Mall'
        },
        {
            key: 'East Point',
            value: 'east_Point'
        },
        {
            key: 'Rustavi',
            value: 'rustavi'
        },
        {
            key: 'Batumi',
            value: 'batumi'
        },
        {
            key: 'Kutaisi',
            value: 'kutaisi'
        },
        {
            key: 'Gori',
            value: 'gori'
        }
    ],
    'elitElectronics':[
        {
            key:'Tbilisi, City Mall Saburtalo', 
            value: 'tbilisi_cityMall_Saburtalo'
        },
        {
            key:'Tbilisi, City Mall Gldani', 
            value: 'tbilisi_cityMall_Gldani'
        },
        {
            key:'Tbilisi, Tbilisi Central', 
            value: 'tbilisi_tbilisi_Central'
        },
        {
            key:'Tbilisi, East Point', 
            value: 'tbilisi_eastPoint'
        },
        {
            key:'Tbilisi, Aghmashenebeli Avenue 2a', 
            value: 'tbilisi_aghmashenebeli'
        },
        {
            key:'Kutaisi, Gamsakhurdia 5', 
            value: 'kutaisi_gamsakhurdia'
        },
        {
            key:'Kutaisi, Rustaveli 95', 
            value: 'kutaisi_rustaveli'
        },
        {
            key:'Rustavi, Shartava 4', 
            value: 'rustavi_shartava'
        },
        {
            key:'Batumi, Gorgiladze 94', 
            value: 'batumi_gorgiladze'
        },
        {
            key:'Batumi, Chavchavadze 78/88', 
            value: 'batumi_chavchavadze'
        },
        {
            key:'Zugdidi, Kikalishvili 6', 
            value: 'zugdidi_kikalashvili'
        },
        {
            key:'Foti, Rustaveli Circle 5', 
            value: 'foti_rustaveli'
        },
        {
            key:'Ozurgeti, Bishop Gabriel 2', 
            value: 'ozurgeti_bishop_Gabriel'
        },
        {
            key:'Akhaltsikhe, Merab Kostava 39a', 
            value: 'akhaltsikhe_kostava'
        },
        {
            key:'Khashuri, Kostava 1', 
            value: 'khashuri_kostava'
        },
        {
            key:'Gori, Tskhinvali Highway 8', 
            value: 'gori_tskhinvaliHWY'
        },
        {
            key:'Sagarejo, Aghmashenebeli 39', 
            value: 'sagarejo_aghmashenebeli'
        },
        {
            key:'Telavi, Aghmashenebeli and Alazani cross', 
            value: 'telavi_aghmashenebeli'
        },
        {
            key:'Zestafoni, Aghmashenebeli 67', 
            value: 'zestafoni_aghmashenebeli'
        },
        {
            key:'Samtredia, Razmadze 3', 
            value: 'samtredia_razmadze'
        },
        {
            key:'Senaki, Rustaveli 261a', 
            value: 'senaki_rustaveli'
        },
        {
            key:'Khoni, Mose Khoneli 5', 
            value: 'khoni_khoneli'
        },
    ],
    'zoommer':[
        {
            key: 'Tbilisi, Tsereteli 1', 
            value: 'tbilisi_tsereteli'
        },
        {
            key: 'Tbilisi, Gamsakhurdia (Pekini) 14a', 
            value: 'tbilisi_gamsakhurdia'
        },
        {
            key: 'Tbilisi, East Point', 
            value: 'tbilisi_east_Point'
        },
        {
            key: 'Tbilisi, Tbilisi Central', 
            value: 'tbilisi_tbilisi_Central'
        },
        {
            key: 'Tbilisi, Gldani Mall', 
            value: 'tbilisi_gldani_Mall'
        },
        {
            key: 'Tbilisi, Tbilisi Mall', 
            value: 'tbilisi_tbilisi_Mall'
        },
        {
            key: 'Tbilisi, City Mall Saburtalo', 
            value: 'tbilisi_cityMall_Saburtalo'
        },
        {
            key: 'Tbilisi, Axis Towers', 
            value: 'tbilisi_axisTowers'
        },
        {
            key: 'Tbilisi, Kidobani', 
            value: 'tbilisi_kidobani'
        },
        {
            key: 'Rustavi, Megobroba ave. 16', 
            value: 'rustavi_megobroba'
        },
        {
            key: 'Kutaisi, Tamar Mefe 3', 
            value: 'kutaisi_tamarMefe'
        },
        {
            key: 'Kutaisi, Grand Mall', 
            value: 'kutaisi_grand_Mall'
        },
        {
            key: 'Batumi, Black Sea Mall', 
            value: 'batumi_blackSea_Mall'
        },
        {
            key: 'Batumi, Baratashvili 57', 
            value: 'batumi_baratashvili'
        },
        {
            key: 'Zugdidi, Gamsakhurdia 19', 
            value: 'zugdidi_gamsakhurdia'
        },
        {
            key: 'Telavi, Aghmashenebeli 60', 
            value: 'telavi_aghmashenebeli'
        },
        {
            key: 'Akhaltsikhe, Tamar Mefe 9', 
            value: 'akhaltsikhe_tamarMefe'
        },
    ],
    'beko':[
        {
            key: 'Tbilisi, City Mall Saburtalo', 
            value: 'tbilisi_cityMall_saburtalo'
        },
        {
            key: 'Tbilisi, Tbilisi Central', 
            value: 'tbilisi_tbilisi_Central'
        },
        {
            key: 'Tbilisi, East Point', 
            value: 'tbilisi_eastPoint'
        },
        {
            key: 'Tbilisi, Megaline', 
            value: 'tbilisi_megaline'
        },
        {
            key: 'Tbilisi, Sheshelidze 4', 
            value: 'tbilisi_sheshelidze'
        },
        {
            key: 'Rustavi, Shartava 2g', 
            value: 'rustavi_shartava'
        },
        {
            key: 'Batumi, Melikishvili 69/71', 
            value: 'baramy_melikishvili'
        },
        {
            key: 'Kutaisi, Chavchavadze 39a', 
            value: 'kutaisi_chavchavadze'
        },
        {
            key: 'Kutaisi, Javakhishvili 1', 
            value: 'kutaisi_javakhishvili'
        },
    ],
    'megatechnica':[
        {
            key: 'Tbilisi, Tsereteli 140', 
            value: 'tbilisi_tsereteli'
        },
        {
            key: 'Tbilisi, Kazbegi ave. 70a', 
            value: 'tbilisi_kazbegi'
        },
        {
            key: 'Tbilisi, Khizanishvili 1', 
            value: 'tbilisi_khizanishvili'
        },
        {
            key: 'Tbilisi, Tbilisi Central', 
            value: 'tbilisi_tbilisi_central'
        },
        {
            key: 'Tbilisi, East Point', 
            value: 'tbilisi_eastPoint'
        },
        {
            key: 'Tbilisi, Megaline', 
            value: 'tbilisi_megaline'
        },
        {
            key: 'Rustavi, Shartava 4', 
            value: 'rustavi_shartava'
        },
        {
            key: 'Kutaisi, Rustaveli 99', 
            value: 'kutaisi_rustaveli'
        },
        {
            key: 'Kutaisi, Chavchavadze 42', 
            value: 'kutaisi_chavchavadze'
        },
        {
            key: 'Batumi, Gorgiladze 91', 
            value: 'batumi_gorgiladze'
        },
        {
            key: 'Khashuri, Rustaveli 58', 
            value: 'khashuri_rustaveli'
        },
        {
            key: 'Gori, Tskhinvali Highway 4', 
            value: 'gori_tskhinvali'
        },
        {
            key: 'Borjomi, Meskheti 4', 
            value: 'borjomi_meskheti'
        },
        {
            key: 'Zugdidi, Kostava 30a', 
            value: 'zugdidi_kostava'
        },
        {
            key: 'Gurjaani, Aghmashenebeli 1', 
            value: 'gurjaani_aghmashenebeli'
        },
        {
            key: 'Telavi, Vardoshvili 3', 
            value: 'telavi_vardoshvili'
        },
        {
            key: 'Kvareli, Chavchavadze 182', 
            value: 'kvareli_chavchavadze'
        },
        {
            key: 'Dedoflistskaro, Rustaveli 23', 
            value: 'dedoflistskaro_rustaveli'
        },
        {
            key: 'Kaspi, Saakadze 104', 
            value: 'kaspi_saakadze'
        },
        {
            key: 'Akhaltsikhe, Natenadze 18', 
            value: 'akhaltsikhe_natenadze'
        },
        {
            key: 'Samtredia, Kraveishvili 19', 
            value: 'samtredia_kraveishvili'
        },
    ],
    'metromart':[
        {
            key: 'Tbilisi, Tbilisi Central', 
            value: 'tbilisi_tbilisi_central'
        },
        {
            key: 'Tbilisi, East Point', 
            value: 'tbilisi_eastPoint'
        },
        {
            key: 'Kutaisi, Chavchavadze 61', 
            value: 'kutaisi_chavchavadze'
        },
        {
            key: 'Batumi, Chavchavadze 131', 
            value: 'batumi_chavchavadze'
        },
    ],
    'pcshop':[
        {
            key: 'Tbilisi, Vaja-Pshavela 14a', 
            value: 'tbilisi_vaja'
        },
        {
            key: 'Tbilisi, Marjanishvili 2', 
            value: 'tbilisi_marjanishvili'
    },
    ]
}
$('#shop').on('change', function(e){
    $('#branch').html('');
    var list = shops[e.target.value];
    $('#branch').append($('<option />'));
    $.each(list, function(index,value){
        $('#branch').append(
            $('<option />').val(value.value).text(value.key)
        );
    });
});
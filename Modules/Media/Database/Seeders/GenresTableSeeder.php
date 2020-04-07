<?php


namespace Modules\Media\Database\Seeders;


use Illuminate\Database\Seeder;
use Modules\Media\Models\Music\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            [
                "192",
                "Maddo",
                "Маддо"
            ],
            [
                "193",
                "Rapo",
                "Рапо"
            ],
            [
                "194",
                "Falak",
                "Фалак"
            ],
            [
                "195",
                "Dargilik",
                "Даргилик"
            ],
            [
                "0",
                "Blues",
                "Блюз "
            ],
            [
                "1",
                "Classic rock",
                "Классический рок"
            ],
            [
                "2",
                "Country",
                "Кантри"
            ],
            [
                "3",
                "Dance",
                "Танцевальная"
            ],
            [
                "4",
                "Disco",
                "Диско"
            ],
//            [
//                "5",
//                "Funk",
//                "Фанк"
//            ],
//            [
//                "6",
//                "Grunge",
//                "Гранж"
//            ],
            [
                "7",
                "Hip-Hop",
                "Хип-хоп"
            ],
            [
                "8",
                "Jazz",
                "Джаз"
            ],
//            [
//                "9",
//                "Metal",
//                "Метал"
//            ],
            [
                "10",
                "New Age",
                "Нью Эйдж"
            ],
//            [
//                "11",
//                "Oldies",
//                "Старое произведение"
//            ],
            [
                "12",
                "Other",
                "Другое"
            ],
            [
                "13",
                "Pop",
                "Поп"
            ],
            [
                "14",
                "Rhythm and Blues",
                "R&B"
            ],
            [
                "15",
                "Rap",
                "Рэп"
            ],
            [
                "16",
                "Reggae",
                "Регги"
            ],
            [
                "17",
                "Rock",
                "Рок"
            ],
//            [
//                "18",
//                "Techno",
//                "Техно"
//            ],
//            [
//                "19",
//                "Industrial",
//                "Индустриальная"
//            ],
            [
                "20",
                "Alternative",
                "Альтернативная"
            ],
//            [
//                "21",
//                "Ska",
//                "Ска"
//            ],
//            [
//                "22",
//                "Death metal",
//                "Дэт-метал"
//            ],
//            [
//                "23",
//                "Pranks",
//                "Розыгрыши"
//            ],
            [
                "24",
                "Soundtrack",
                "Саундтрек"
            ],
//            [
//                "25",
//                "Euro-Techno",
//                "Евро-Техно"
//            ],
//            [
//                "26",
//                "Ambient",
//                "Эмбиент"
//            ],
//            [
//                "27",
//                "Trip-Hop",
//                "Трип-Хоп"
//            ],
            [
                "28",
                "Vocal",
                "Вокал"
            ],
            [
                "29",
                "Jazz & Funk",
                "Джаз и Панк"
            ],
            [
                "30",
                "Fusion",
                "Фюжин"
            ],
            [
                "31",
                "Trance",
                "Транс"
            ],
            [
                "32",
                "Classical",
                "Классчиская"
            ],
            [
                "33",
                "Instrumental",
                "Инструментальная"
            ],
//            [
//                "34",
//                "Acid",
//                "Кислотная"
//            ],
//            [
//                "35",
//                "House",
//                "Хаус"
//            ],
//            [
//                "36",
//                "Game",
//                "Игровая"
//            ],
//            [
//                "37",
//                "Sound clip",
//                "Аудиоклип"
//            ],
//            [
//                "38",
//                "Gospel",
//                "Евангелие"
//            ],
            [
                "39",
                "Noise",
                "Шум"
            ],
            [
                "40",
                "Alternative Rock",
                "Альтернативный Рок"
            ],
//            [
//                "41",
//                "Bass",
//                "Бас"
//            ],
            [
                "42",
                "Soul",
                "Сол"
            ],
            [
                "43",
                "Punk",
                "Панк"
            ],
            [
                "44",
                "Space",
                "Космическая"
            ],
            [
                "45",
                "Meditative",
                "Медитативная"
            ],
            [
                "46",
                "Instrumental Pop",
                "Инструментальный Поп"
            ],
            [
                "47",
                "Instrumental Rock",
                "Инструментальный Рок"
            ],
            [
                "48",
                "Ethnic",
                "Этническая"
            ],
            [
                "49",
                "Gothic",
                "Готическая"
            ],
//            [
//                "50",
//                "Darkwave",
//                "Дарквэйв"
//            ],
//            [
//                "51",
//                "Techno-Industrial",
//                "Техно-Индустриальная"
//            ],
            [
                "52",
                "Electronic",
                "Электронная"
            ],
            [
                "53",
                "Pop-Folk",
                "Поп-фолк"
            ],
//            [
//                "54",
//                "Eurodance",
//                "Евродэнс"
//            ],
//            [
//                "55",
//                "Dream",
//                "Мечта"
//            ],
//            [
//                "56",
//                "Southern Rock",
//                "Южный Рок"
//            ],
//            [
//                "57",
//                "Comedy",
//                "Комедийная"
//            ],
//            [
//                "58",
//                "Cult",
//                "Культовая"
//            ],
            [
                "59",
                "Gangsta",
                "Гангста"
            ],
//            [
//                "60",
//                "Top 40",
//                "Топ 40"
//            ],
//            [
//                "61",
//                "Christian Rap",
//                "Христианский Рэп"
//            ],
            [
                "62",
                "Pop/Funk",
                "Поп/Фанк"
            ],
            [
                "63",
                "Jungle",
                "Джангл"
            ],
//            [
//                "64",
//                "Native US",
//                "Американская"
//            ],
//            [
//                "65",
//                "Cabaret",
//                "Кабарэ"
//            ],
            [
                "66",
                "New Wave",
                "Новая Волна"
            ],
            [
                "67",
                "Psychedelic",
                "Психоделическая"
            ],
            [
                "68",
                "Rave",
                "Рейв"
            ],
//            [
//                "69",
//                "Show tunes",
//                "Мелодии шоу"
//            ],
//            [
//                "70",
//                "Trailer",
//                "Трейлер"
//            ],
            [
                "71",
                "Lo-Fi",
                "Лоу-Фай"
            ],
            [
                "72",
                "Tribal",
                "Племенная"
            ],
//            [
//                "73",
//                "Acid Punk",
//                "Кислотный Панк"
//            ],
//            [
//                "74",
//                "Acid Jazz",
//                "Кислотный Джаз"
//            ],
//            [
//                "75",
//                "Polka",
//                "Полька"
//            ],
            [
                "76",
                "Retro",
                "Ретро"
            ],
            [
                "77",
                "Musical",
                "Мюзикл"
            ],
            [
                "78",
                "Rock ’n’ Roll",
                "Рок`н`ролл"
            ],
            [
                "79",
                "Hard Rock",
                "Тяжелый Рок"
            ],
            [
                "80",
                "Folk",
                "Фолк"
            ],
            [
                "81",
                "Folk-Rock",
                "Фолк-Рок"
            ],
            [
                "82",
                "National Folk",
                "Национальный Фолк"
            ],
//            [
//                "83",
//                "Swing",
//                "Свинг"
//            ],
//            [
//                "84",
//                "Fast Fusion",
//                "Фаст Фюжн"
//            ],
            [
                "85",
                "Bebop",
                "Бибоп"
            ],
            [
                "86",
                "Latin",
                "Латинская"
            ],
//            [
//                "87",
//                "Revival",
//                "Возрождение"
//            ],
//            [
//                "88",
//                "Celtic",
//                "Кельтская"
//            ],
//            [
//                "89",
//                "Bluegrass",
//                "Блюграсс"
//            ],
            [
                "90",
                "Avantgarde",
                "Авангард"
            ],
//            [
//                "91",
//                "Gothic Rock",
//                "Готический Рок"
//            ],
            [
                "92",
                "Progressive Rock",
                "Прогрессивный Рок"
            ],
//            [
//                "93",
//                "Psychedelic Rock",
//                "Психоделический Рок"
//            ],
//            [
//                "94",
//                "Symphonic Rock",
//                "Симфонический Рок"
//            ],
//            [
//                "95",
//                "Slow rock",
//                "Медленный рок"
//            ],
            [
                "96",
                "Big Band",
                "Биг-бэнд"
            ],
            [
                "97",
                "Chorus",
                "Хор"
            ],
            [
                "98",
                "Easy Listening",
                "Легкая музыка"
            ],
            [
                "99",
                "Acoustic",
                "Акустическая"
            ],
//            [
//                "100",
//                "Humour",
//                "Юмористическая"
//            ],
            [
                "101",
                "Speech",
                "Речь"
            ],
            [
                "102",
                "Chanson",
                "Шансон"
            ],
            [
                "103",
                "Opera",
                "Опера"
            ],
            [
                "104",
                "Chamber music",
                "Комнатная музыка"
            ],
            [
                "105",
                "Sonata",
                "Сонета"
            ],
            [
                "106",
                "Symphony",
                "Симфония"
            ],
//            [
//                "107",
//                "Booty bass",
//                "Бути басс"
//            ],
//            [
//                "108",
//                "Primus",
//                "Примус"
//            ],
//            [
//                "109",
//                "Porn groove",
//                "Порн грув"
//            ],
            [
                "110",
                "Satire",
                "Сатира"
            ],
            [
                "111",
                "Slow jam",
                "Слоу Джем"
            ],
            [
                "112",
                "Club",
                "Клубная"
            ],
            [
                "113",
                "Tango",
                "Танго"
            ],
            [
                "114",
                "Samba",
                "Самба"
            ],
            [
                "115",
                "Folklore",
                "Фольклор"
            ],
            [
                "116",
                "Ballad",
                "Баллада"
            ],
//            [
//                "117",
//                "Power ballad",
//                "Сильная баллада"
//            ],
//            [
//                "118",
//                "Rhythmic Soul",
//                "Ритмческий сол"
//            ],
            [
                "119",
                "Freestyle",
                "Фристайл"
            ],
            [
                "120",
                "Duet",
                "Дуэт"
            ],
            [
                "121",
                "Punk Rock",
                "Панк Рок"
            ],
            [
                "122",
                "Drum solo",
                "Драм Соло"
            ],
            [
                "123",
                "A cappella",
                "Акапелла"
            ],
//            [
//                "124",
//                "Euro-House",
//                "Евро-Хаус"
//            ],
//            [
//                "125",
//                "Dance Hall",
//                "Дэнс Холл"
//            ],
//            [
//                "126",
//                "Goa",
//                "Гоа"
//            ],
            [
                "127",
                "Drum & Bass",
                "Драм-н-бэйс"
            ],
//            [
//                "128",
//                "Club-House",
//                "Клаб-Хаус"
//            ],
//            [
//                "129",
//                "Hardcore Techno",
//                "Хардкор-техно"
//            ],
//            [
//                "130",
//                "Terror",
//                ""
//            ],
            [
                "131",
                "Indie",
                "Инди"
            ],
            [
                "132",
                "BritPop",
                "БритПоп"
            ],
//            [
//                "133",
//                "Negerpunk",
//                "Нигерпанк"
//            ],
//            [
//                "134",
//                "Polsk Punk",
//                ""
//            ],
            [
                "135",
                "Beat",
                "Бит"
            ],
//            [
//                "136",
//                "Christian Gangsta Rap",
//                "Христианский Гангста Рэп"
//            ],
            [
                "137",
                "Heavy Metal",
                "Тяжелый Метал"
            ],
            [
                "138",
                "Black Metal",
                "Черный Метал"
            ],
            [
                "139",
                "Crossover",
                "Кроссовер"
            ],
//            [
//                "140",
//                "Contemporary Christian",
//                "Современная Христианская Музыка"
//            ],
//            [
//                "141",
//                "Christian rock",
//                "Христианский Рок"
//            ],
//            [
//                "142",
//                "Merengue",
//                "Меренга"
//            ],
            [
                "143",
                "Salsa",
                "Сальса"
            ],
//            [
//                "144",
//                "Thrash Metal",
//                "Трэш Метал"
//            ],
//            [
//                "145",
//                "Anime",
//                "Аниме"
//            ],
//            [
//                "146",
//                "Jpop",
//                "Джей-поп"
//            ],
//            [
//                "147",
//                "Synthpop",
//                "Синт-поп"
//            ],
            [
                "148",
                "Abstract",
                "Абстрактная"
            ],
            [
                "149",
                "Art Rock",
                "Арт-Рок"
            ],
            [
                "150",
                "Baroque",
                "Барокко"
            ],
            [
                "151",
                "Bhangra",
                "Бхангра"
            ],
//            [
//                "152",
//                "Big beat",
//                "Биг бит"
//            ],
//            [
//                "153",
//                "Breakbeat",
//                "Брейкбит"
//            ],
//            [
//                "154",
//                "Chillout",
//                "Чиллаут"
//            ],
//            [
//                "155",
//                "Downtempo",
//                "Даунтемпо"
//            ],
//            [
//                "156",
//                "Dub",
//                "Даб"
//            ],
//            [
//                "157",
//                "EBM",
//                "ЕВМ"
//            ],
            [
                "158",
                "Eclectic",
                "Эклектичная"
            ],
//            [
//                "159",
//                "Electro",
//                "Электро"
//            ],
//            [
//                "160",
//                "Electroclash",
//                "Электроклаш"
//            ],
//            [
//                "161",
//                "Emo",
//                "Эмо"
//            ],
            [
                "162",
                "Experimental",
                "Экспериментальная"
            ],
            [
                "163",
                "Garage",
                "Гараж"
            ],
            [
                "164",
                "Global",
                "Глобальная"
            ],
//            [
//                "165",
//                "IDM",
//                ""
//            ],
//            [
//                "166",
//                "Illbient",
//                ""
//            ],
//            [
//                "167",
//                "Industro-Goth",
//                ""
//            ],
//            [
//                "168",
//                "Jam Band",
//                ""
//            ],
//            [
//                "169",
//                "Krautrock",
//                "Краут-рока"
//            ],
//            [
//                "170",
//                "Leftfield",
//                "Неформатная"
//            ],
            [
                "171",
                "Lounge",
                "Лаундж"
            ],
//            [
//                "172",
//                "Math Rock",
//                "Мэт Рок"
//            ],
            [
                "173",
                "New Romantic",
                "Нью-Романтик"
            ],
            [
                "174",
                "Nu-Breakz",
                "Нью-Брейк"
            ],
//            [
//                "175",
//                "Post-Punk",
//                "Пост-Панк"
//            ],
            [
                "176",
                "Post-Rock",
                "Пост-Рок"
            ],
//            [
//                "177",
//                "Psytrance",
//                ""
//            ],
//            [
//                "178",
//                "Shoegaze",
//                "Шугейз"
//            ],
            [
                "179",
                "Space Rock",
                "Космический Рок"
            ],
//            [
//                "180",
//                "Trop Rock",
//                "Троп Рок"
//            ],
            [
                "181",
                "World Music",
                "Мировая Музыка"
            ],
            [
                "182",
                "Neoclassical",
                "Неоклассическая"
            ],
            [
                "183",
                "Audiobook",
                "Аудиокнига"
            ],
//            [
//                "184",
//                "Audio theatre",
//                "Аудио театр"
//            ],
//            [
//                "185",
//                "Neue Deutsche Welle",
//                "Немецкая новая волна"
//            ],
            [
                "186",
                "Podcast",
                "Подкаст"
            ],
            [
                "187",
                "Indie-Rock",
                "Инди Рок"
            ],
//            [
//                "188",
//                "G-Funk",
//                "Джи-Фанк"
//            ],
            [
                "189",
                "Dubstep",
                "Дабстеп"
            ],
//            [
//                "190",
//                "Garage Rock",
//                "Гараж Рок"
//            ],
//            [
//                "191",
//                "Psybient",
//                "Психологическая"
//            ]
        ];

        foreach ($genres as $data) {
            Genre::create([
                'code' => $data[0],
                'name' => $data[1],
                'local_name' => $data[2]
            ]);
        }
    }
}

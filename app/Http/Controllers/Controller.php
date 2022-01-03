<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategory():array
    {
        $faker = Factory::create();
        $categories = [
            'politics' =>
            [
                'name' => 'Политика',
                'news'=> [
                [
                    'id'=>1,
                    'title'=>'Французы восхитились новогодней речью Путина',
                    'description'=>'Французы назвали президента РФ Путина "выдающимся политиком" после его новогодней речи',
                    'author' => $faker->userName()
                ],
                [
                    'id'=>2,
                    'title'=>'Россия твердо отстаивала интересы в сфере безопасности, заявил Путин',
                    'description'=>'Президент Путин заявил, что Россия твердо отстаивала интересы в сфере безопасности',
                    'author' => $faker->userName()
                ],
                [
                    'id'=>3,
                    'title'=>'Лавров рассказал о предложениях России по гарантиям безопасности',
                    'description'=>'Глава МИД Лавров: на основе предложений России возможны договоренности по вооружениям',
                    'author' => $faker->userName()
                ],
                [
                    'id'=>4,
                    'title'=>'В Совфеде увидели надежду на снижение напряженности между Россией и США',
                    'description'=>'Сенатор Цеков: диалог России и США дает надежду на снижение напряженности',
                    'author' => $faker->userName()
                ],
                [
                    'id'=>5,
                    'title'=>'В Госдуме заявили о начале нового этапа в отношениях России и США',
                    'description'=>'Депутат Затулин: разговор лидеров России и США стал новым этапом в отношениях двух стран',
                    'author' => $faker->userName()
                ],
                ]
            ],
            'economics' =>
                [
                    'name' => 'Экономика',
                    'news'=> [
                        [
                            'id'=>1,
                            'title'=>'В Британии заявили о катастрофичном снижении уровня жизни',
                            'description'=>'Эксперты Resolution Foundation: у британцев катастрофически снизился уровень жизни',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>2,
                            'title'=>'Не расслабляйтесь. Почему стоит купить валюту после праздников',
                            'description'=>'Финансист Марков посоветовал россиянам закупиться после новогодних праздников валютой',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>3,
                            'title'=>'Экономист заявил, что в 2022 году биткоин утратит свои позиции',
                            'description'=>'Экономист Ордов заявил, что в 2022 году появится полноценный цифровой юань',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>4,
                            'title'=>'В России начнут более строгий расчет долговой нагрузки населения',
                            'description'=>'Эксперты: долговую нагрузку россиян с нового года рассчитывают строже',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>5,
                            'title'=>'ЕС зафиксировал первое за десять лет снижение экспорта игристых вин',
                            'description'=>'ЕС зафиксировал в 2020 году первое за десять лет снижение экспорта игристых вин',
                            'author' => $faker->userName()
                        ],
                    ]
                ],
            'culture' =>
                [
                    'name' => 'Культура',
                    'news'=> [
                        [
                            'id'=>1,
                            'title'=>'Итальянцев восхитил спецвыпуск "Вечернего Урганта"',
                            'description'=>'Пользователей из Италии восхитил новый спецвыпуск "Вечернего Урганта" "CIAO, 2021"',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>2,
                            'title'=>'Вы готовы? Астролог рассказала, что ждет каждый знак зодиака в 2022-м',
                            'description'=>'Астролог рассказала, что ждет каждый знак зодиака в 2022 году',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>3,
                            'title'=>'Сыгравший Джеймса Бонда актер удостоился британского ордена',
                            'description'=>'Сыгравший Джеймса Бонда актер Дэниел Крейг удостоился британского рыцарского ордена',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>4,
                            'title'=>'Джеймс Ганн представил нового героя спин-оффа "Отряда самоубийц"',
                            'description'=>'Джеймс Ганн представил нового героя сериала "Миротворец", спин-оффа "Отряда самоубийц"',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>5,
                            'title'=>'Дуэйн Джонсон отказался возвращаться в "Форсаж"',
                            'description'=>'Дуэйн Джонсон отказался возвращаться во франшизу "Форсаж"',
                            'author' => $faker->userName()
                        ],
                    ]
                ],
            'sport' =>
                [
                    'name' => 'Спорт',
                    'news'=> [
                        [
                            'id'=>1,
                            'title'=>'Метания Стины: как одна из лучших лыжниц мира обрела себя в биатлоне',
                            'description'=>'Стина Нильссон без сил упала на снег сразу за финишной чертой.',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>2,
                            'title'=>'Французы восхитились новогодней речью Путина',
                            'description'=>'Французы назвали президента РФ Путина "выдающимся политиком" после его новогодней речи',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>3,
                            'title'=>'Французы восхитились новогодней речью Путина',
                            'description'=>'Французы назвали президента РФ Путина "выдающимся политиком" после его новогодней речи',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>4,
                            'title'=>'Французы восхитились новогодней речью Путина',
                            'description'=>'Французы назвали президента РФ Путина "выдающимся политиком" после его новогодней речи',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>5,
                            'title'=>'Французы восхитились новогодней речью Путина',
                            'description'=>'Французы назвали президента РФ Путина "выдающимся политиком" после его новогодней речи',
                            'author' => $faker->userName()
                        ],
                    ]
                ],
            'tourism' =>
                [
                    'name' => 'Туризм',
                    'news'=> [
                        [
                            'id'=>1,
                            'title'=>'Гид по Мальдивам: сколько стоят туры и как выбрать идеальный остров',
                            'description'=>'В этом году Мальдивы — в числе самых популярных зимних направлений.',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>2,
                            'title'=>'Зимой в Дербент: главные достопримечательности древнего города',
                            'description'=>'Дербент претендует на звание самого древнего города России. Официально ему две тысячи лет, неофициально — пять тысяч. ',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>3,
                            'title'=>'Фаер-шоу, хороводы и море красок: как встретили Новый год в России и мире',
                            'description'=>'Сложно представить более веселое, объединяющее людей по всему миру событие, чем Новый год. ',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>4,
                            'title'=>'С QR-кодом или без: какие горнолыжные курорты Европы открыты для россиян',
                            'description'=>'Любителей горнолыжного спорта волнует вопрос, куда этой зимой можно поехать покататься в Европе.',
                            'author' => $faker->userName()
                        ],
                        [
                            'id'=>5,
                            'title'=>'От Дубая до Будапешта: самые популярные зарубежные города на Новый год',
                            'description'=>'На новогодние каникулы большинство российских туристов едут в Стамбул, Дубай, Шарм-эш-Шейх',
                            'author' => $faker->userName()
                        ],
                    ]
                ],
        ];


        return $categories;
    }

    public function getNews():array
    {
        $categories = $this->getCategory();

        $faker = Factory::create();

        $news = [];

        for($i = 0;$i<10;$i++){
            $news [] = [
                'id'=>$i,
                'title'=>$faker->jobTitle(),
                'description'=>$faker->text(250),
                'author' => $faker->userName()
            ];
        }
        return $news;
    }

    public function getNewsById($id, $category):array
    {
        $allCategories = $this->getCategory();
        $news = $allCategories[$category]['news'];

        foreach ($news as $newsItem){
            if ($newsItem['id'] == $id) {
                return $newsItem;
            }
        }

        return  $news;
    }

    public function getCategoryNews($category):array
    {
        $allCategories = $this->getCategory();
        $news = $allCategories[$category]['news'];

        return  $news;
    }
}

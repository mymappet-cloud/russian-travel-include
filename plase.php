<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Проект третьего спринта Василия Муравьева на Яндекс.Практикуме">
    <meta name="keywords" content="html, css">
    <meta name="author" content="Василий Муравьев">
    <link rel="stylesheet" href="./pages/index.css">
    <title>Путешествие по России</title>
</head>
<body class="body">
<div class="page">
<?php

require_once 'header.php';
?>
<section class="places">
            <article class="place">
                <h3 class="place__title">Куршская коса</h3>
                <div class="website">
                    <p class="website__url-heading">URL</p>
                    <a href="http://park-kosa.ru" target="_blank" class="website__link">park-kosa.ru</a>
                </div>
                <img class="place__image" alt="Куршская коса" src="./images/nikita-tikhomirov-1153188-unsplash.jpg">
                <div class="paragraph">
                    <p class="paragraph__item">Здесь, посреди лесов и песчаных дюн, вы сможете увидеть два водных
                        горизонта — спокойного
                        Куршского залива с одной стороны и подёрнутого рябью волн Балтийского моря с другой. Уникальная
                        природная зона на краю российского анклава.
                    </p>
                    <p class="paragraph__item">На этом Калининградская область не заканчивается. Для путешественника
                        и исследователя там же по
                        соседству — самая западная точка России, Балтийская коса, — и немецкое наследие россыпи
                        небольших приморских городов. Атмосфера здешних мест исключает суету, окуная в спокойствие
                        природы и запах стального, прохладного моря.
                    </p>
                </div>
            </article>
            <article class="place">
                <h3 class="place__title">Кольский</h3>
                <div class="website">
                    <p class="website__url-heading">URL</p>
                    <a href="https://yourshot.nationalgeographic.com/photos/?keywords=kolskiy" target="_blank"
                       class="website__link">National Geographic</a>
                </div>
                <img class="place__image" alt="Кольский" src="./images/kolckiy.jpg">
                <div class="paragraph">
                    <p class="paragraph__item">Почти весь полуостров находится за Полярным кругом. Саамская тундра, от
                        которой на юг —
                        тайга, а на север — Ледовитый океан, прикидывающийся Баренцевым морем.
                    </p>
                    <p class="paragraph__item">Возможно, вы смотрели Звягинцева и даже слышали историю арктического
                        фестиваля в Териберке. Возможно, слово «Хибины» не осталось под снегом школьных воспоминаний об
                        уроках географии. Возможно, вы не интересовались пронизывающей земную кору сверхглубокой
                        скважиной, а от апатитов вас давно накрывает апатия. Но ваша мечта увидеть северное сияние
                        начинает сбываться с билетом
                        в Мурманск.
                    </p>
                </div>
            </article>
            <article class="place">
                <h3 class="place__title">Алтай</h3>
                <div class="website">
                    <p class="website__url-heading">URL</p>
                    <a href="https://www.facebook.com/vera.bashmakova/posts/10156011613718822" target="_blank"
                       class="website__link">Facebook</a>
                </div>
                <img class="place__image" alt="Алтай" src="./images/altai.jpg">
                <div class="paragraph">
                    <p class="paragraph__item">Алтай — одно из красивейших мест в России.
                        В первую очередь из-за гор: если ехать вдоль хребта, вы увидите склоны, усыпанные соснами,
                        горные реки и озёра. А если вы откроете в автомобиле окна, сможете познакомиться с невидимым
                        чудом здешних мест — горным воздухом.
                    </p>
                    <p class="paragraph__item">Климат на Алтае умеренный, поэтому ехать сюда лучше всего летом. Так вы
                        увидите всё разнообразие местной флоры и фауны. По лесам Алтая бродят лоси, над хребтами летают
                        орлы, а на равнинах пасутся косули. И знаменитые манулы — тоже обитатели Алтайского края.
                    </p>
                </div>
            </article>
            <article class="place">
                <h3 class="place__title">Зимний Байкал</h3>
                <div class="website">
                    <p class="website__url-heading">URL</p>
                    <a href="https://vk.com/baikalmile" target="_blank"
                       class="website__link">https://vk.com/baikalmile</a>
                </div>
                <img class="place__image" alt="Зимний Байкал" src="./images/baikal.jpg">
                <div class="paragraph">
                    <p class="paragraph__item">Всем известен Байкал как крупнейшее озеро
                        в мире. Многие также знают, что это самый большой источник пресной воды и одно из красивейших
                        мест в России.
                    </p>
                    <p class="paragraph__item">Конечно, это всё так. Но Байкал ещё идеальное место для соревнований по
                        скийорингу. Это такой вид спорта, когда лыжник привязывает себя
                        к мотоциклу, и тандем старается развить как можно бóльшую скорость на льду. В марте 2019 года на
                        фестивале «Байкальская миля» был поставлен мировой рекорд — 197.011 км/ч.
                    </p>
                </div>
            </article>
            <article class="place">
                <h3 class="place__title">Карелия</h3>
                <div class="website">
                    <p class="website__url-heading">URL</p>
                    <a href="http://vodlozero.ru" target="_blank" class="website__link">http://vodlozero.ru/</a>
                </div>
                <img class="place__image" alt="Карелия" src="./images/karelia.jpg">
                <div class="paragraph">
                    <p class="paragraph__item">Сибирь заканчивается не на Урале, а в Карелии: образующая тайгу сибирская
                        лиственница не растёт западнее Водлозера. Зато здесь она вымахивает на 30 метров — леса
                        карельских национальных парков из-за непроходимых болот никогда не знали топора. Некоторым
                        соснам уже больше чем полтысячелетия. Прикоснитесь к живому существу, видевшему солнце раньше,
                        чем увидал его Иван Грозный.
                        В девственном лесу на сотню километров не встретишь тропы. А на редких тропинках деревья
                        в паре метров от земли помечены медвежьими когтями. Чтобы все знали, кто тут хозяин.
                    </p>
                </div>
            </article>
        </section>
<?php
require_once 'footer.php';

?>

</div>
</body>
</html>
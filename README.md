1. Первое что нужно сделать это вынести глобальную переменную $_REQUEST в отдельный класс, 
 чтобы не брать ничего напрямую.
2. Также это нужно сделать с PDO т.к наш класс имеющий логику, не должен иметь прямой доступ к базе.
3. Нужно добавить сервисный слой, чтобы наш класс Search не имел логику, а лишь отвечал за отображение данных.
4. Чтобы классы друг от друга не зависили, нужно чтобы зависимости внедряли через конструктор т.е используя Dependency Injection. Также это можно сделать с помощью Абстрактных Фабрик.
5. Для запросов важно использовать отдельные классы, чтобы позже можно было поменять их реализации к примеру с SQL на NoSQL.
6. Использовать DTO важно, чтобы мапить пришедшие данные со стороннего сервиса на наш формат.
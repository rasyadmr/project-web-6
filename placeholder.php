<!-- Item -->
Item::create([
    "name" => "T-shirt",
    "slug" => "tshirt",
    "price" => 19.99,
    "description" => "a type of casual clothing item that is typically made of soft and breathable fabric, such as cotton or a cotton blend. It is characterized by its short sleeves and a round neckline, although variations such as V-necks or scoop necks also exist. T-shirts are often designed with a loose or relaxed fit, providing comfort for everyday wear.",
    "category_id" => 1
]);

Item::create([
    "name" => "Pants",
    "slug" => "pants",
    "price" => 9.99,
    "description" => "a type of clothing that covers the lower body, from the waist to the ankles or sometimes the knees. They typically consist of two separate leg coverings, one for each leg, joined together at the waistband. Pants come in various styles, including jeans, slacks, chinos, and leggings, each with its own unique features and purposes.",
    "category_id" => 1
]);

Item::create([
    "name" => "Watch",
    "slug" => "watch",
    "price" => 49.99,
    "description" => "<span class='badge text-bg-success'>Flash Sale</span><p>a portable timepiece designed to be worn on a person's wrist, typically with a strap or bracelet. It consists of a display face, often protected by glass or crystal, which shows the current time and sometimes additional information such as the date, day of the week, and various other functions depending on its complexity.</p>",
    "category_id" => 2
]);

Item::create([
    "name" => "Smartphone",
    "slug" => "smartphone",
    "price" => 499.99,
    "description" => "a handheld device that combines the functionalities of a mobile phone with those of a computer. It typically features a touchscreen interface for user interaction and runs on a mobile operating system, such as iOS (for iPhones), Android, or others. smartphones have become an indispensable part of modern life, offering convenience, connectivity, and a wide range of capabilities in a compact and portable form factor.",
    "category_id" => 3
]);


<!-- Category -->
Category::create([
    "name" => "Clothing",
    "slug" => "clothing"
]);

Category::create([
    "name" => "Accessories",
    "slug" => "accessories"
]);

Category::create([
    "name" => "Electronics",
    "slug" => "electronics"
]);
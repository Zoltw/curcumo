create table users
(
    id_user  serial
        primary key,
    name     varchar(100) not null,
    email    varchar(100) not null,
    password varchar(100) not null,
    role     integer default 0
);

create table products
(
    id_products serial
        constraint products_pk
            primary key,
    product_1   varchar(100) not null,
    amount_1    varchar(16),
    unit_1      varchar(16),
    product_2   varchar(100) not null,
    amount_2    integer,
    unit_2      varchar(16),
    product_3   varchar(100) not null,
    amount_3    integer,
    unit_3      varchar(16),
    product_4   varchar(100) not null,
    amount_4    integer,
    unit_4      varchar(16),
    product_5   varchar(100),
    amount_5    integer,
    unit_5      varchar(16),
    product_6   varchar(100),
    amount_6    integer,
    unit_6      varchar(16),
    product_7   varchar(100),
    amount_7    integer,
    unit_7      varchar(16),
    product_8   varchar(100),
    amount_8    integer,
    unit_8      varchar(16),
    product_9   varchar(100),
    amount_9    integer,
    unit_9      varchar(16),
    product_10  varchar(100),
    amount_10   integer,
    unit_10     varchar(16)
);

create table optional_products
(
    id_optional serial
        constraint optional_products_pk
            primary key,
    product_o_1 varchar(100) not null,
    amount_o_1  integer,
    unit_o_1    varchar(16)  not null
);

create table meals
(
    id_meal           serial
        primary key,
    name              varchar(100)  not null,
    type              varchar(100)  not null,
    goal              varchar(100)  not null,
    time              integer       not null,
    level_diff        varchar(32)   not null,
    products          integer
        constraint meals_products_id_products_fk
            references products
            on update cascade,
    optional_products integer
        constraint meals_optional_products_id_optional_fk
            references optional_products
            on update cascade,
    image             varchar(255)  not null,
    description_1     varchar(1024) not null,
    description_2     varchar(1024) not null,
    description_3     varchar(1024) not null,
    description_4     varchar(1024),
    description_5     varchar(1024)
);

create table list
(
    id_user_list integer
        constraint list_users_id_user_fk
            references users
            on update cascade on delete cascade,
    id_meal_list integer
        constraint list_meals_id_meal_fk
            references meals
            on update cascade
);

INSERT INTO public.users (id_user, name, email, password, role) VALUES (2, 'maro', 'mareczek@dupa.pl', '$2y$10$MawEa4AWXu4SXHCLD/A.V.7RR5wMlhyadFgKaFXTl81CoJLJmPbX.', 0);
INSERT INTO public.users (id_user, name, email, password, role) VALUES (3, 'janW', 'janeczek@jan.pl', '$2y$10$ZdFTut140w8pnnu7AgMG7u10nPzDnIljgZLYos0L/O4BMSJr5FWgC', 0);
INSERT INTO public.users (id_user, name, email, password, role) VALUES (1, 'filip', 'filipzor890@gmail.com', '$2y$10$phd825QfkqbnpLq4qLgSIOaGMer1H7.RNhtGezxLDNZd6Y/xMEfvK', 1);
INSERT INTO public.users (id_user, name, email, password, role) VALUES (10, 'dupajasiuakordeon', 'dupajasiu@gmail.com', '$2y$10$1Grm9/pGLKigXzwEL6Pyl.9ehINcEfElGnqC3GNmuzQqSZtSNCI1.', 0);


INSERT INTO public.products (id_products, product_1, amount_1, unit_1, product_2, amount_2, unit_2, product_3, amount_3, unit_3, product_4, amount_4, unit_4, product_5, amount_5, unit_5, product_6, amount_6, unit_6, product_7, amount_7, unit_7, product_8, amount_8, unit_8, product_9, amount_9, unit_9, product_10, amount_10, unit_10) VALUES (1, 'Tagiatelle pasta', '400', 'g', 'Wild garlic', 100, 'g', 'Fresh basil', 50, 'g', 'Cashew', 30, 'g', 'Sunflower seeds', 30, 'g', 'Parmeggiano regano', 70, 'g', 'Olive Oil', 100, 'ml', 'salt', null, 'Pinch of', 'ground black pepper', null, 'Pinch of', null, null, null);
INSERT INTO public.products (id_products, product_1, amount_1, unit_1, product_2, amount_2, unit_2, product_3, amount_3, unit_3, product_4, amount_4, unit_4, product_5, amount_5, unit_5, product_6, amount_6, unit_6, product_7, amount_7, unit_7, product_8, amount_8, unit_8, product_9, amount_9, unit_9, product_10, amount_10, unit_10) VALUES (2, 'Sunflower Oil', '2', 'tbsp', 'Chilli flakes', 1, 'pinch', 'Garlic', 2, 'gloves', 'Pumpkin Seeds', 2, 'tbsp', 'Onion', 2, null, 'Pumpkin', 800, 'g', 'Vegetable Stock Cubes', 2, '', null, null, null, null, null, null, null, null, null);
INSERT INTO public.products (id_products, product_1, amount_1, unit_1, product_2, amount_2, unit_2, product_3, amount_3, unit_3, product_4, amount_4, unit_4, product_5, amount_5, unit_5, product_6, amount_6, unit_6, product_7, amount_7, unit_7, product_8, amount_8, unit_8, product_9, amount_9, unit_9, product_10, amount_10, unit_10) VALUES (3, 'Oil', '1', 'tbsp', 'Onion', 1, '', 'Fresh ginger', 1, 'tbsp', 'Garlic', 3, 'cloves', 'Chicken breast', null, null, 'Garam masala', 1, 'tbsp', 'Cumin', 1, 'tbsp', 'Heavy cream', 1, 'cup', 'Salt', 1, 'tbsp', 'Cooked rice', null, null);
INSERT INTO public.products (id_products, product_1, amount_1, unit_1, product_2, amount_2, unit_2, product_3, amount_3, unit_3, product_4, amount_4, unit_4, product_5, amount_5, unit_5, product_6, amount_6, unit_6, product_7, amount_7, unit_7, product_8, amount_8, unit_8, product_9, amount_9, unit_9, product_10, amount_10, unit_10) VALUES (4, 'Eggs', '4', '', 'Milk', 1, 'cup', 'Butter', 1, 'tbsp', 'Sugar', 1, 'tbsp', 'Vanilla extract', 1, 'tbsp', 'Salt', 1, 'tbsp', 'Flour', 1, 'cup', null, null, null, null, null, null, null, null, null);
INSERT INTO public.products (id_products, product_1, amount_1, unit_1, product_2, amount_2, unit_2, product_3, amount_3, unit_3, product_4, amount_4, unit_4, product_5, amount_5, unit_5, product_6, amount_6, unit_6, product_7, amount_7, unit_7, product_8, amount_8, unit_8, product_9, amount_9, unit_9, product_10, amount_10, unit_10) VALUES (5, 'Greek yoghurt', '1', 'cup', 'Fresh dill', 3, null, 'Mint leaves', 9, null, 'Garlic', 1, 'clove', 'Eggs', 2, null, 'Vinegar', 1, 'tbsp', 'Butter', 55, 'g', 'Chilli flakes', 1, 'tbsp', 'Smoked paprika', 1, 'tbsp', null, null, null);
INSERT INTO public.products (id_products, product_1, amount_1, unit_1, product_2, amount_2, unit_2, product_3, amount_3, unit_3, product_4, amount_4, unit_4, product_5, amount_5, unit_5, product_6, amount_6, unit_6, product_7, amount_7, unit_7, product_8, amount_8, unit_8, product_9, amount_9, unit_9, product_10, amount_10, unit_10) VALUES (6, 'Olive Oil', '1', 'cup', 'Rustic Italian bread', 8, 'slices', 'Basil pesto', 50, 'g', 'Provolone Cheese', 16, 'slices', 'Prosciutto', 12, 'slices', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO public.products (id_products, product_1, amount_1, unit_1, product_2, amount_2, unit_2, product_3, amount_3, unit_3, product_4, amount_4, unit_4, product_5, amount_5, unit_5, product_6, amount_6, unit_6, product_7, amount_7, unit_7, product_8, amount_8, unit_8, product_9, amount_9, unit_9, product_10, amount_10, unit_10) VALUES (7, 'Gluten-Free Baking Flour', '2', 'cups', 'Sugar', 6, 'caps', 'Natural cocoa powder', 2, 'cup', 'Baking powder', 2, 'tbsp', 'Milk', 1, 'cup', 'Eggs', 3, null, 'Butter', 1, 'cup', null, null, null, null, null, null, null, null, null);
INSERT INTO public.products (id_products, product_1, amount_1, unit_1, product_2, amount_2, unit_2, product_3, amount_3, unit_3, product_4, amount_4, unit_4, product_5, amount_5, unit_5, product_6, amount_6, unit_6, product_7, amount_7, unit_7, product_8, amount_8, unit_8, product_9, amount_9, unit_9, product_10, amount_10, unit_10) VALUES (8, 'Olive Oil', '2', 'tbsp', 'Onion', 1, null, 'Garlic', 3, 'cloves', 'Paprika', 1, null, 'Tomato pelati', 1, 'can', 'Eggs', 3, null, 'Cumin', 2, 'tbsp', 'Smoked paprika', 1, 'tbsp', 'Cayenne pepper', 1, 'pinch', 'Salt', 1, 'pinch');


INSERT INTO public.meals (id_meal, name, type, goal, time, level_diff, products, optional_products, image, description_1, description_2, description_3, description_4, description_5) VALUES (1, 'Pesto tagiatelle', 'vegetarian', 'less meat', 40, 'easy', 1, 1, 'pesto-tagiatelle.jpg', 'Fry the nuts and seeds in a dry frying pan for a couple of minutes until dry.', 'Make the sauce. Grind nuts, basil, garlic, seeds, cheese, butter, salt and pepper in a blender.', 'At the same time, boil the pasta in boiling water according to the instructions on the package.', 'Serve the pasta with the sauce. Sprinkle with cheese on top.', 'Enjoy your meal!');
INSERT INTO public.meals (id_meal, name, type, goal, time, level_diff, products, optional_products, image, description_1, description_2, description_3, description_4, description_5) VALUES (2, 'Pumpkin soup', 'vegan', 'less meat', 60, 'medium', 2, 2, 'pumpkin-soup.jpg', 'Preheat the oven to 180°C/350°F/gas mark 4.', 'Place the pumpkin seeds on a baking tray and cook in the oven for 8 to 10 minutes, until toasted. Remove from the oven and sprinkle with the chilli flakes and salt.', 'Meanwhile, heat the sunflower oil in a large saucepan set over a medium heat. Add the onions and garlic and cook for 3 to 4 minutes, until softened. Add the pumpkin and crumble in the stock cubes, then pour in the water.', 'Bring to the boil, then reduce the heat and simmer for 15 minutes, until the pumpkin is tender. Blend the soup until smooth and season to taste with salt and pepper.', 'Ladle the soup into warmed bowls, sprinkle with the pumpkin seeds and serve.');
INSERT INTO public.meals (id_meal, name, type, goal, time, level_diff, products, optional_products, image, description_1, description_2, description_3, description_4, description_5) VALUES (3, 'Butter Chicken with rice', 'rest', 'rest', 50, 'easy', 3, 3, 'butter-chicken.jpg', 'Heat a large skillet or medium saucepan over medium-high heat. Add the oil, butter, and onions and cook onions down until lightly golden, about 3-4 minutes. ', 'Add ginger and garlic and let cook for 30 seconds, stirring so it doesn’t burn.', 'Add the chicken, tomato paste, and spices. Cook for 5-6 minutes or until everything is cooked through.', 'Add the heavy cream and simmer for 8-10 minutes stirring occasionally. Serve over Basmati rice or with naan.', 'Enjoy your meal!');
INSERT INTO public.meals (id_meal, name, type, goal, time, level_diff, products, optional_products, image, description_1, description_2, description_3, description_4, description_5) VALUES (4, 'Irish pancakes', 'vegetarian', 'less meat', 20, 'easy', 4, 4, 'irish-pancakes.jpg', 'Preheat the oven to 180°C/350°F and butter an ovenproof baking dish. Set aside.', 'Blend or whisk vigorously the eggs, milk, melted butter, sugar, lemon zest, vanilla, and salt. A blender works great, but it can also be done whisking by hand. Gradually add flour; blend until smooth. Let stand 15 minutes.', 'Heat a medium nonstick skillet over medium-high heat. Brush with butter. Using a 1/4 cup measure, pour the batter into the bottom of the pan, tilting to coat and form a circle. Cook until the bottom is golden brown, about 30 to 45 seconds. Using a spatula, turn the pancake. ', 'Cook the flipped side until the bottom becomes brown and speckled; about 30 seconds. Turn out onto paper towel. Cover with another paper towel. Repeat this process until all of the pancake batter has been used. Brush the skillet with melted butter as needed.', 'Sift powdered sugar over the speckled side of each pancake, then lightly sprinkle a little lemon juice over each pancake. Fold into quarters and lay in the prepared baking dish. Continue to overlap the pancakes as they are folded. Cover and bake until the pancakes are heated through; about 10 minutes. Serve immediately with additional powdered sugar and lemon juice as desired.');
INSERT INTO public.meals (id_meal, name, type, goal, time, level_diff, products, optional_products, image, description_1, description_2, description_3, description_4, description_5) VALUES (5, 'Cilbir - turkish eggs', 'vegetarian', 'less meat', 25, 'easy', 5, 5, 'turkish-eggs.jpg', 'Finely chop the dill and mint, crush or grate the garlic clove and combine the ingredients with the Greek yoghurt. Season with salt and pepper and leave aside.', 'Fill a deep pot with water and bring it to the boil. Add 1 tablespoon of vinegar and create a vortex. Crack the egg and add it to the middle of the vortex. Cook for three minutes to get the perfect egg with a runny yolk. Remove the egg with a slotted spoon and leave aside while you cook the next egg.', 'Using a pan, melt the butter. When the butter starts to bubble add the spices. Stir until well combined and the sauce will be ready to serve.', 'Transfer the Greek yoghurt into the serving bowl. Place the eggs on the top and pour the chili sauce. Sprinkle some extra dill and mint on the top. ', 'Enjoy your meal!');
INSERT INTO public.meals (id_meal, name, type, goal, time, level_diff, products, optional_products, image, description_1, description_2, description_3, description_4, description_5) VALUES (6, 'Panini with prosciutto', 'rest', 'rest', 15, 'easy', 6, 6, 'panini-with-prosciutto.jpg', 'Heat a panini grill or waffle iron. Brush oil over bread slices. Turn 4 slices over; spread pesto evenly over bread.', 'Top with half of the cheese, tearing to fit if necessary, all of the prosciutto and pepper strips and remaining cheese.', 'Close sandwiches with remaining bread oiled sides up. ', 'Cook (in batches) in panini maker or waffle iron 3 to 4 minutes or until golden brown and cheese is melted. ', 'Enjoy your meal!');
INSERT INTO public.meals (id_meal, name, type, goal, time, level_diff, products, optional_products, image, description_1, description_2, description_3, description_4, description_5) VALUES (7, 'Chocolate cake', 'no gluten', 'rest', 80, 'hard', 7, 7, 'chocolate-cake.jpg', 'Preheat oven to 350°F. Prepare your pan(s). Lightly grease: two 8" round cake pans OR one 9" x 13"- pan with nonstick cooking spray.', 'Whisk together gluten-free flour, sugar, cocoa powder, baking powder, baking soda, and salt in a large bowl. Add milk, vegetable oil, and eggs. Whisk batter until smooth.', e'Bake until a cake tester inserted into the center of the cakes comes out clean. For 8-inch round cakes: about 30 minutes. For 9×13-inch pan: about 40 minutes.
', 'Allow cakes to cool in the pan for 10 minutes. Remove cake(s) from the pan and place on a wire rack to cool. ', 'When cool, frost with chocolate frosting. Wrap cake and store at room temperature for up to three days.');
INSERT INTO public.meals (id_meal, name, type, goal, time, level_diff, products, optional_products, image, description_1, description_2, description_3, description_4, description_5) VALUES (8, 'Shakshuka', 'vegetarian', 'more greens', 45, 'easy', 8, 8, 'shakshuka.jpg', 'Heat the oil over medium heat in a 12-inch lidded stainless steel or enamel-coated cast-iron skillet. Add the onion, red pepper, salt, and several grinds of fresh pepper and cook until the onion is soft and translucent, 6 to 8 minutes.', 'Reduce the heat to medium-low and add the garlic, paprika, cumin, and cayenne, if using. Stir and let cook for about 30 seconds, then add the tomatoes and harissa paste. Simmer for 15 minutes until the sauce is thickened.', 'Add the spinach and stir until wilted. Make 3 to 5 wells in the sauce and crack in the eggs. Cover and cook until the eggs are set, 5 to 8 minutes. The timing will depend on how runny you like your egg yolks.', 'Season with salt and pepper to taste and sprinkle with the feta, parsley, avocado, and microgreens, if using. Serve with toasted bread for scooping.', 'Enjoy your meal!');


INSERT INTO public.optional_products (id_optional, product_o_1, amount_o_1, unit_o_1) VALUES (1, 'Cherry tomato', 8, 'x');
INSERT INTO public.optional_products (id_optional, product_o_1, amount_o_1, unit_o_1) VALUES (3, 'Lemongrass', 3, 'x');
INSERT INTO public.optional_products (id_optional, product_o_1, amount_o_1, unit_o_1) VALUES (2, 'Almonds', 10, 'x');
INSERT INTO public.optional_products (id_optional, product_o_1, amount_o_1, unit_o_1) VALUES (5, 'Green onion', null, '');
INSERT INTO public.optional_products (id_optional, product_o_1, amount_o_1, unit_o_1) VALUES (4, 'Maple syrup', null, '');
INSERT INTO public.optional_products (id_optional, product_o_1, amount_o_1, unit_o_1) VALUES (7, 'Cherries', 8, 'x');
INSERT INTO public.optional_products (id_optional, product_o_1, amount_o_1, unit_o_1) VALUES (8, 'Feta cheese', 20, 'g');
INSERT INTO public.optional_products (id_optional, product_o_1, amount_o_1, unit_o_1) VALUES (6, 'BBQ sauce', null, '');

-- Create the database (uncomment if you need to create the database)
-- CREATE DATABASE RockPaperScissorsDB;
-- USE RockPaperScissorsDB;

-- Player entity table
CREATE TABLE Player (
                        player_id INT PRIMARY KEY,
                        player_name VARCHAR(100) NOT NULL
);

-- Game entity table
CREATE TABLE Game (
                      game_id INT PRIMARY KEY,
                      game_date DATETIME NOT NULL,
                      player1_id INT NOT NULL,
                      player2_id INT NOT NULL,
                      FOREIGN KEY (player1_id) REFERENCES Player(player_id),
                      FOREIGN KEY (player2_id) REFERENCES Player(player_id),
                      CHECK (player1_id <> player2_id) -- Ensure a player doesn't play against themselves
);

-- Pick entity table (composite key from Game and Player)
CREATE TABLE Pick (
                      game_id INT NOT NULL,
                      player_id INT NOT NULL,
                      pick_name VARCHAR(10) NOT NULL,
                      PRIMARY KEY (game_id, player_id),
                      FOREIGN KEY (game_id) REFERENCES Game(game_id),
                      FOREIGN KEY (player_id) REFERENCES Player(player_id),
                      CHECK (pick_name IN ('Rock', 'Paper', 'Scissors')) -- Ensure only valid picks
);


-- Insert 6 players
INSERT INTO Player (player_id, player_name) VALUES
                                                (1, 'Alice'),
                                                (2, 'Bob'),
                                                (3, 'Charlie'),
                                                (4, 'Dana'),
                                                (5, 'Eve'),
                                                (6, 'Frank');

-- Insert 6 games with different player combinations
INSERT INTO Game (game_id, game_date, player1_id, player2_id) VALUES
                                                                  (1, '2023-10-15 09:00:00', 1, 2),    -- Alice vs Bob
                                                                  (2, '2023-10-15 10:30:00', 3, 4),    -- Charlie vs Dana
                                                                  (3, '2023-10-15 14:00:00', 5, 6),    -- Eve vs Frank
                                                                  (4, '2023-10-16 11:15:00', 2, 3),    -- Bob vs Charlie
                                                                  (5, '2023-10-16 16:45:00', 1, 4),    -- Alice vs Dana
                                                                  (6, '2023-10-17 13:30:00', 5, 2);    -- Eve vs Bob

-- Insert 12 picks (2 for each game)
INSERT INTO Pick (game_id, player_id, pick_name) VALUES
-- Game 1: Alice vs Bob
(1, 1, 'Rock'),
(1, 2, 'Scissors'),  -- Alice wins (Rock crushes Scissors)

-- Game 2: Charlie vs Dana
(2, 3, 'Paper'),
(2, 4, 'Rock'),      -- Charlie wins (Paper covers Rock)

-- Game 3: Eve vs Frank
(3, 5, 'Scissors'),
(3, 6, 'Paper'),     -- Eve wins (Scissors cut Paper)

-- Game 4: Bob vs Charlie
(4, 2, 'Scissors'),
(4, 3, 'Paper'),     -- Bob wins (Scissors cut Paper)

-- Game 5: Alice vs Dana
(5, 1, 'Rock'),
(5, 4, 'Rock'),      -- Tie (Rock vs Rock)

-- Game 6: Eve vs Bob
(6, 5, 'Paper'),
(6, 2, 'Rock');      -- Eve wins (Paper covers Rock)
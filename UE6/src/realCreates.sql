
CREATE TABLE Game (
                      id INTEGER PRIMARY KEY,
                      player1 TEXT NOT NULL,
                      player2 TEXT NOT NULL,
                      date DATETIME NOT NULL,
                      player1pick TEXT CHECK(player1pick IN ('Rock', 'Paper', 'Scissors')) NOT NULL,
                      player2pick TEXT CHECK(player2pick IN ('Rock', 'Paper', 'Scissors')) NOT NULL
);

-- Beispiel-Daten einfügen (id wird automatisch vergeben)
INSERT INTO Game (player1, player2, date, player1pick, player2pick) VALUES
                                                                        ('Alice', 'Bob', '2025-05-10 14:30:00', 'Rock', 'Scissors'),
                                                                        ('Charlie', 'Dana', '2025-05-10 15:00:00', 'Paper', 'Rock'),
                                                                        ('Eve', 'Frank', '2025-05-11 10:15:00', 'Scissors', 'Paper'),
                                                                        ('Grace', 'Heidi', '2025-05-11 12:00:00', 'Rock', 'Rock'),
                                                                        ('Ivan', 'Judy', '2025-05-12 09:45:00', 'Paper', 'Scissors');

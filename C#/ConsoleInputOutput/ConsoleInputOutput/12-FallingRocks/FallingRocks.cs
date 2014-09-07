using System;
using _12_FallingRocks;
using System.Threading;
using System.Collections.Generic;
    
    struct Rocks  
    {
        public int row;
        public int col;
        public string c;
        public ConsoleColor color;
    }
class FallingRocks
{
  
    static void Main()
    {
        int playFieldWidth = Console.WindowWidth - 50;
        int passedRocks = 1;
        int playerPosition = playFieldWidth / 2;
        Random randomGenerator = new Random();
        int lives = 3;
        RemoveConsoleBuffer();
        PrintPlayer(playerPosition, '0');
        List<Rocks> rocks = new List<Rocks>();
        List<Rocks> moreRocks = new List<Rocks>();
        Rocks rock = new Rocks();
        Rocks moreRock = new Rocks();
        bool alive = true;
        int level = 1;
        while (alive)
        {
            if (passedRocks%10==0)
            {
                level++;
            }
            int points = passedRocks/10;
            if (passedRocks%1000==0)
            {
                lives=lives+1;
            }
            
            string[] chars = { "^", "@", "*", "&", "+", "%", "$", "#", "!", ".", ";"  };
            rock.col = randomGenerator.Next(0, playFieldWidth);
            rock.row = 0;
            rock.color = ConsoleColor.Cyan;
            rock.c = chars[randomGenerator.Next(0,chars.Length)];
            if (rock.c=="^"||rock.c=="!"||rock.c=="&")
            {
                rock.color = ConsoleColor.Green;
            }
            else if (rock.c=="@"||rock.c==".")
            {
                rock.color = ConsoleColor.DarkYellow;
            }
            else if (rock.c=="*"||rock.c==";")
            {
                rock.color = ConsoleColor.Magenta;
            }
            else if (rock.c=="+"||rock.c=="%")
            {
                rock.color = ConsoleColor.White;
            }
            else if (rock.c=="$"||rock.c=="#")
            {
                rock.color = ConsoleColor.Cyan;
            }
            rocks.Add(rock);
            moreRock.c = rock.c;
            moreRock.color = rock.color;
            moreRock.row = rock.row;
            moreRock.col = randomGenerator.Next(0, playFieldWidth);
            moreRocks.Add(moreRock);
            PrintPlayer(playerPosition, '0');
            foreach (var roc in rocks)
            {
                PrintAtPosition(roc.col, roc.row, roc.c, roc.color);
            }
            foreach (var roc in moreRocks)
            {
                PrintAtPosition(roc.col, roc.row, roc.c, roc.color);
            }
            for (int i = 0; i < Console.WindowHeight; i++)
            {
                PrintAtPosition(playFieldWidth, i, "|");
            }
            PrintAtPosition(playFieldWidth + 2, 1,"Points:" + Convert.ToString(points));
            PrintAtPosition(playFieldWidth + 2, 3, "Lives:" + Convert.ToString(lives));
            PrintAtPosition(playFieldWidth + 2, 5, "Level:" + Convert.ToString(level));
            PrintAtPosition(playFieldWidth + 2, Console.WindowHeight-5, "Falling Rocks by Nikola Galabov");
            if (Console.KeyAvailable)
            {
                ConsoleKeyInfo key = Console.ReadKey(true);
                while (Console.KeyAvailable)
                {
                    Console.ReadKey(true);
                }
                if (key.Key == ConsoleKey.LeftArrow)
                {
                    if (playerPosition > 0)
                    {
                        playerPosition--;
                        PrintPlayer(playerPosition + 1, ' ');
                        PrintPlayer(playerPosition, '0');
                    }

                }
                else if (key.Key == ConsoleKey.RightArrow)
                {
                    if (playerPosition<playFieldWidth-1)
                    {
                        playerPosition++;
                        PrintPlayer(playerPosition - 1, ' ');
                        PrintPlayer(playerPosition, '0');
                    }
                    
                }
            }
            List<Rocks> newlist = new List<Rocks>();

            for (int i = 0; i < rocks.Count; i++)
            {
                Rocks oldRock = rocks[i];
                Rocks newRock = oldRock;
                newRock.c = oldRock.c;
                newRock.color = oldRock.color;
                newRock.col = oldRock.col;
                newRock.row = oldRock.row + 1;
                if (newRock.col==playerPosition&&newRock.row==Console.WindowHeight-1)
                {
                    newRock.color = ConsoleColor.Red;
                    newRock.c = "x";
                    lives--; 
                    rocks.Clear();
                    moreRocks.Clear();
                }
                if (newRock.row<Console.WindowHeight)
                {
                    newlist.Add(newRock);
                }
                else
                {
                    passedRocks++;  
                }
            }
            rocks = newlist;
            List<Rocks> newMore = new List<Rocks>();

            for (int i = 0; i < moreRocks.Count; i++)
            {
                Rocks oldRock = moreRocks[i];
                Rocks newRock = oldRock;
                newRock.c = oldRock.c;
                newRock.color = oldRock.color;
                newRock.col = oldRock.col;
                newRock.row = oldRock.row + 1;
                if (newRock.col == playerPosition && newRock.row == Console.WindowHeight - 1)
                {
                    newRock.color = ConsoleColor.Red;
                    newRock.c = "x";
                    lives--;
                    moreRocks.Clear();
                    rocks.Clear();
                }
                if (newRock.row < Console.WindowHeight)
                {
                    newMore.Add(newRock);
                }
                else
                {
                    passedRocks++;
                }
            }
            moreRocks = newMore;
            Thread.Sleep(153-3*level);
            Console.Beep(randomGenerator.Next(37,32766),100);
            Console.Clear();
            foreach (var roc in rocks)
            {
                PrintAtPosition(roc.col, roc.row, roc.c, roc.color);
            }
            if (lives <= 0)
            {
                Console.Clear();
                alive = false;
                PrintAtPosition(Console.WindowWidth / 2-9, Console.WindowHeight / 2, "Game over!", ConsoleColor.DarkRed);
                PrintAtPosition(Console.WindowWidth / 2 - 9, Console.WindowHeight / 2+1, "Your points:" + Convert.ToString(points), ConsoleColor.DarkRed);
                PrintAtPosition(Console.WindowWidth / 2 - 9, Console.WindowHeight / 2+2, "Press any key to exit...", ConsoleColor.DarkRed);
                Console.ReadLine();
                return;
            }
            
        }
        
    }

   
    private static void PrintAtPosition(int row, int col, string someThing, ConsoleColor color=ConsoleColor.Gray)
    {
        Console.SetCursorPosition(row, col);
        Console.ForegroundColor = color;
        Console.Write(someThing);
    }

    private static void RemoveConsoleBuffer()
    {
        Console.BufferHeight = Console.WindowHeight;
        Console.BufferWidth = Console.WindowWidth=65;
    }

    private static void PrintPlayer(int x, char c,ConsoleColor color = ConsoleColor.DarkGray)
    {
        Console.ForegroundColor = color;
        Console.SetCursorPosition(x, Console.WindowHeight - 1);
        Console.Write(c);
    }
}


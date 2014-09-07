using System;

class CheckForPlayCard
{
    static void Main()
    {
        string cards = "23456789JQKA";
        string input = Console.ReadLine();
        bool valid = false;
        for (int i = 0; i < cards.Length; i++)
        {
            if (input==cards[i].ToString()||input=="10")
            {
                valid = true;
            }
        }

        if (valid)
        {
            Console.WriteLine("yes");
        }
        else
        {
            Console.WriteLine("No");
        }
    }
}


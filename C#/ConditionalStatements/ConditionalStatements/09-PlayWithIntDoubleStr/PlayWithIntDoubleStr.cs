using System;

class PlayWithIntDoubleStr
{
    static void Main()
    {
        Console.WriteLine("Please choose a type:\n1 --> int\n2 --> double\n3 --> string");
        int number = int.Parse(Console.ReadLine());
        if (number==1)
        {
            Console.Write("Please enter an int: ");
            int result = int.Parse(Console.ReadLine());
            Console.WriteLine("{0}", result);
        }
        else if (number == 2)
        {
            Console.Write("Please enter an double: ");
            double result = double.Parse(Console.ReadLine());
            Console.WriteLine("{0}", result);
        }
        else if (number == 3)
        {
            Console.Write("Please enter an string: ");
            string result = Console.ReadLine();
            Console.WriteLine("{0}*",result);
        }
    }
}


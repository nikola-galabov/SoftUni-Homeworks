using System;

    class ComparingFloats
    {
        static void Main(string[] args)
        {
            Console.Write("Number A = ");
            double numA = double.Parse(Console.ReadLine());
            Console.WriteLine();
            Console.Write("Number B = ");
            double numB = double.Parse(Console.ReadLine());
            bool result = true;
            if(Math.Abs(numA-numB)<0.000001)
            {
                result = true;
            }
            else
            {
                result = false;
            }
            Console.WriteLine(result);
        }
    }

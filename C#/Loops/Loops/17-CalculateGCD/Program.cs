using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _17_CalculateGCD
{
    class Program
    {
        static void Main(string[] args)
        {
            int a = int.Parse(Console.ReadLine());
            int b = int.Parse(Console.ReadLine());
            //int result = Math.Min(Math.Abs(a), Math.Abs(b));
            //while (a % result != 0 || b % result != 0)
            //{
            //    result--;
            //}
            //Console.WriteLine(result);

            int c = 0;
            if (a > b)
            {
                int temp = 0;
                temp = b;
                b = a;
                a = temp;
            }
            while (b != 0)
            {
                c = b;
                b = a % b;
                a = c;
            }
            Console.WriteLine(a);
        }
    }
}

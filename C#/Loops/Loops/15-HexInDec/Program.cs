using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _15_HexInDec
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            long result = 0;
            for (int i = 0; i < input.Length; i++)
            {
                int number = 0;
                if (input[i]=='A')
                {
                    number = 10;
                }
                else if (input[i]=='B')
                {
                    number = 11;
                }
                else if (input[i] == 'C')
                {
                    number = 12;
                }
                else if (input[i] == 'D')
                {
                    number = 13;
                }
                else if (input[i] == 'E')
                {
                    number = 14;
                }
                else if (input[i] == 'F')
                {
                    number = 15;
                }
                else
                {
                    number = int.Parse(input[i].ToString());
                }
                result += number * (long)Math.Pow(16,input.Length-1-i);
            }
            Console.WriteLine(result);
        }
    }
}

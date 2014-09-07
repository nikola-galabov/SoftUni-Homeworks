using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _09_MatrixOfNums
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            for (int row = 0; row < n; row++)
            {
                int counter = 1+row;
                while (counter-row<=n)
                {
                    Console.Write(counter+" ");
                    counter++;
                }
                Console.WriteLine();
            }
        }
    }
}

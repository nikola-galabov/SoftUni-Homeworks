using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _06_CalculateNfactDivKfact
{
    class Program
    {
        static void Main(string[] args)
        {
            double n = double.Parse(Console.ReadLine());
            double k = double.Parse(Console.ReadLine());
            double kFact = 1;
            double nFact = 2;
            for (int i = 2; i <= k; i++)
            {
                kFact *= i;
            }
            for (int i = 3; i <= n; i++)
            {
                nFact *= i;
            }

            Console.WriteLine(nFact/kFact);
        }
    }
}

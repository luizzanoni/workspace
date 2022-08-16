// See https://aka.ms/new-console-template for more information

// Primeiros 50 min do vídeo fredi

// Console.Write("Digite seu nome: ");
// string name = Console.ReadLine();
// Console.WriteLine("Olá " + name + ", seja bem vindo");

// Console.Write("Digite o ano do seu nascimento: ");
// int year = int.Parse(Console.ReadLine());
// int age = 2022 - year;
// Console.WriteLine($"Você tem {age} anos.");

// if (age >= 18) 
// {
//     Console.WriteLine("Voce é maior de idade.");
// }
// else 
// {
//     Console.WriteLine ("Você é menor de idade.");
// }

// Segunda parte do video ARRAY

class Program
{
    static void Main()
    {
        string[] names = { "Fredi", "Mariana", "Isabela" };

        // for (int i = 0; i < names.Length; i++)
        // {
        //     Console.WriteLine(names[i]);
        // }

        foreach (string name in names)
        {
            Console.WriteLine(name);
        }
    }
}

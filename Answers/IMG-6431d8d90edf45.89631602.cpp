#include <iostream>

using namespace std;

int main()
{
    int v,e;
    cin>>v>>e;
    int adj_matrix[v][v];



    for(int i=0;i<v;i++)
    {
        for(int j=0;j<v;j++)
        {
            adj_matrix[i][j]=0;

        }

    }



    for(int i=0;i<e;i++)
    {
        int start,end;
        cin>>start>>end;
        adj_matrix[start][end]=1;
        adj_matrix[end][start]=1;

    }


    int highest_degree=0;

    for(int i=0;i<v;i++)
    {  int count=0;
        for(int j=0;j<v;j++)
        {
            if(adj_matrix[i][j]==1)
                count++;
        }
        if(count>highest_degree)
            highest_degree=count;
    }

    for(int i=0;i<v;i++)
    {  int count=0;
        for(int j=0;j<v;j++)
        {
            if(adj_matrix[i][j]==1)
                count++;
        }
        if(count==highest_degree)
            cout<<i<<" ";
    }
    cout<<endl;


    return 0;
}

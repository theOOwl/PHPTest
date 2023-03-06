USE [test_db]
GO

/****** Object:  Table [dbo].[users]    Script Date: 3/6/2023 9:07:22 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[users](
	[id] [int] IDENTITY(1000,1) NOT NULL,
	[u_first_name] [nvarchar](100) NULL,
	[u_last_name] [nvarchar](100) NULL,
	[u_user_name] [nvarchar](100) NULL,
	[u_password] [nvarchar](MAX) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO



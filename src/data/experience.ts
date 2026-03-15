function diffInYears(startDate: string, endDate?: string): number {
  const start = new Date(startDate);
  const end = endDate ? new Date(endDate) : new Date();
  return Math.floor((end.getTime() - start.getTime()) / (1000 * 60 * 60 * 24 * 365.25));
}

export interface ExperienceItem {
  title: string;
  start: string;
  end?: string;
  length: number;
  in_use: boolean;
}

export const experience: ExperienceItem[] = [
  { title: 'Go', start: '2022-02-01', in_use: true, length: diffInYears('2022-02-01') },
  { title: 'PHP', start: '2002-01-01', in_use: true, length: diffInYears('2002-01-01') },
  { title: 'HTML', start: '2001-01-01', in_use: true, length: diffInYears('2001-01-01') },
  { title: 'CSS', start: '2003-01-01', in_use: true, length: diffInYears('2003-01-01') },
  { title: 'Python', start: '2015-01-01', in_use: true, length: diffInYears('2015-01-01') },
  { title: 'Linux', start: '2011-05-01', in_use: true, length: diffInYears('2011-05-01') },
  { title: 'Windows', start: '2001-01-01', in_use: true, length: diffInYears('2001-01-01') },
  { title: 'Mac OSX', start: '2005-01-01', in_use: true, length: diffInYears('2005-01-01') },
  { title: 'Shell Scripting', start: '2014-01-01', in_use: true, length: diffInYears('2014-01-01') },
  { title: 'Ansible', start: '2018-06-18', in_use: true, length: diffInYears('2018-06-18') },
  { title: 'Terraform', start: '2019-05-22', in_use: true, length: diffInYears('2019-05-22') },
  { title: 'CentOS', start: '2011-05-01', in_use: true, length: diffInYears('2011-05-01') },
  { title: 'AWS', start: '2017-01-01', in_use: true, length: diffInYears('2017-01-01') },
  { title: 'Google Cloud', start: '2018-12-01', in_use: true, length: diffInYears('2018-12-01') },
  { title: 'MySQL', start: '2005-01-01', in_use: true, length: diffInYears('2005-01-01') },
  { title: 'jQuery', start: '2007-01-01', in_use: true, length: diffInYears('2007-01-01') },
  { title: 'React', start: '2019-11-20', in_use: true, length: diffInYears('2019-11-20') },
  { title: 'Javascript', start: '2005-01-01', in_use: true, length: diffInYears('2005-01-01') },
  {
    title: 'Magento',
    start: '2014-07-15',
    end: '2022-10-01',
    in_use: false,
    length: diffInYears('2014-07-15', '2022-10-01'),
  },
  { title: 'Magento 2', start: '2016-01-19', in_use: true, length: diffInYears('2016-01-19') },
  { title: 'Apache', start: '2011-05-01', in_use: true, length: diffInYears('2011-05-01') },
  { title: 'NGINX', start: '2015-12-24', in_use: true, length: diffInYears('2015-12-24') },
  { title: 'Laravel', start: '2013-11-15', in_use: true, length: diffInYears('2013-11-15') },
  { title: 'AlpineJS', start: '2020-05-22', in_use: true, length: diffInYears('2020-05-22') },
  { title: 'Ubuntu', start: '2019-12-06', in_use: true, length: diffInYears('2019-12-06') },
  { title: 'Packer', start: '2019-01-22', in_use: true, length: diffInYears('2019-01-22') },
  { title: 'Docker', start: '2019-01-10', in_use: true, length: diffInYears('2019-01-10') },
  { title: 'Kubernetes', start: '2020-01-01', in_use: true, length: diffInYears('2020-01-01') },
  { title: 'Git', start: '2011-02-19', in_use: true, length: diffInYears('2011-02-19') },
  { title: 'Composer', start: '2013-05-06', in_use: true, length: diffInYears('2013-05-06') },
  { title: 'TailwindCSS', start: '2020-05-22', in_use: true, length: diffInYears('2020-05-22') },
];

// Sort by in_use desc, then length desc (matching Jigsaw sort: ['-in_use', '-length'])
export const sortedExperience = [...experience].sort((a, b) => {
  if (a.in_use !== b.in_use) return a.in_use ? -1 : 1;
  return b.length - a.length;
});

// The "start of career" date used for experience percentage calculation
export const careerStart = new Date('2001-06-01');
